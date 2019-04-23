<?php

// The trait for the API
trait Api {

    // Method for getting api info from the DB
    static function get_api_info() {
        // validate incoming parameters
        $prepApiData_array = static::validate_and_prep_api_parameters($_GET);
        // check to see if we have errors
        if (!$prepApiData_array['errors']) {
            // send in query
            // sqlOptions will contain [whereOptions],[sortingOptions],[columnOptions]
            $Obj_array = static::find_where($prepApiData_array['sqlOptions']);
            // check to see if you got anything back, if yes move over and get API info
            if ($Obj_array) {
                // loop over and get api info
                foreach ($Obj_array as $Obj) {
                    // get api info
                    $ObjApiInfo = $Obj->get_full_api_data();
                    // put info into a new array
                    $apiData_array[] = $ObjApiInfo;
                }
            }

            // Create the response message
            $responseData = [
                "success" => true,
                "statusCode" => 200,
                "errors" => [],
                "requestMethod" => $_SERVER['REQUEST_METHOD'],
                "totalPages" => 1,
                "currentPage" => 1,
                "paramsSent" => $_GET,
                static::$tableName => $apiData_array
            ];

        // There were errors, construct the error message
        } else {
            // Errors response
            $responseData = [
                "success" => false,
                "statusCode" => 400,
                "errors" => [
                    "code" => 400,
                    "statusMessage" => "Bad Request",
                    "errorMessages" => $prepApiData_array['errors']
                ],
                "requestMethod" => $_SERVER['REQUEST_METHOD'],
                "totalPages" => 1,
                "currentPage" => 1,
                "paramsSent" => $_GET
            ];
        }
        
        // Package the response into json and return it
        $jsonData = json_encode($responseData);
        return $jsonData;
    }

    // Validate and prep the API parameters
    // TODO: Add handling for sortingOptions
    static function validate_and_prep_api_parameters($getParams_array) {
        // Prepare the array we will use to hold our preped API data
        $prepApiData_array['errors'] = [];

        // Prep the API parameters to be used in the SQL
        foreach($getParams_array as $paramKey => $paramValue) {
            // Check if the parameter is defined in the class
            if(isset(static::$apiParameters[$paramKey])) {
                // Check if it is a sorting option
                if(static::$apiParameters[$paramKey]['refersTo'] === 'sortingOption') {
                    // Check if the data is a list
                    if(is_list($paramValue)) {
                        // Check if we accept a list as a data type
                        if(isset(static::$apiParameters[$paramKey]['connection']['list'])) {
                            $prepApiData_array['errors'][] = "{$paramKey} does not accept a list of values!";
                            break;
                        }

                        // Turn the list into an array
                        $list_array = split_string_by_comma($paramValue);

                        // TODO: see if we can move this validation to somewhere else

                        // If the array is > 2 then throw an error
                        if(sizeof($list_array) > 2) {
                            $prepApiData_array['errors'][] = "{$paramKey} only accepts a list of 2 values!";
                            break;
                        }

                        // Validate that the first item in the list is the column name
                        if(!isset(static::$apiParameters[$list_array[0]])) {
                            $prepApiData_array['errors'][] = "{$paramKey} must have a valid column name listed first!";
                            break;
                        }

                        // Validate that the second item in the list is a correct order by
                        if($list_array[1] != 'ASC' || $list_array[1] != 'DESC') {
                            $prepApiData_array['errors'][] = "{$paramKey} must have a valid  value listed second! Valid values are 'ASC' or 'DESC'";
                            break;
                        }

                        // Add the data to the sortingOptions
                        $prepApiData_array['sortingOptions'] = [
                            "option" => $paramKey,
                            "value" => $listItem
                        ];

                    // The data was not a list
                    } else {
                        // TODO: add the rest of the code here to add sortingOptions that are not a list
                    }
                
                // Check if the data is a list
                } elseif(is_list($paramValue)) {
                    // Check if we accept a list as a data type
                    if(isset(static::$apiParameters[$paramKey]['connection']['list'])) {
                        $prepApiData_array['errors'][] = "{$paramKey} does not accept a list of values!";
                        return $prepApiData_array;
                    }
                    // Turn the list into an array and add it to our list of whereOptions
                    $newList_array = split_string_by_comma($paramValue);

                    // Prep the beginning of the string for holding our list of values
                    $valueList = "( ";
                    foreach($newList_array as $listItem) {
                        // Validate the value
                        $errors = self::validate_api_params($listItem, $paramKey);

                        // If there are errors then exit the function with the errors
                        if(isset($errors)) {
                            // Add each error from the validation error array
                            foreach($errors as $err) {
                                $prepApiData_array['errors'][] = $err;
                            }
                            break;

                        // No errors were found add to our sql prepped list
                        } else {
                            // If at not at the end of the array add the comma
                            if($listItem !== end($newList_array)) {
                                $valueList .= self::db_escape($listItem) . ", ";

                            // If at the end of the array then add a paranetheses instead
                            } else {
                                $valueList .= self::db_escape($listItem) . " )";
                            }
                        }
                    }
                    // Add the sql preped list to the whereOptions
                    $prepApiData_array['sqlOptions']['whereOptions'][] = [
                        "column" => static::$apiParameters[$paramKey]['refersTo'],
                        "operator" => static::$apiParameters[$paramKey]['connection']['list'],
                        "value" => $valueList
                    ];

                // The data is not a list or a sorting option
                } else {
                    // Validate the value
                    $errors = self::validate_api_params($paramValue, $paramKey);

                    // If there are errors then exit the function with the errors
                    if(!empty($errors)) {
                        // Add each error from the validation error array
                        foreach($errors as $err) {
                            $prepApiData_array['errors'][] = $err;
                        }
                        break;

                    // No errors were found add the data to the array
                    } else {
                        // The parameter was found, add the info needed to our array
                        $prepApiData_array['sqlOptions']['whereOptions'][] = [
                            "column" => static::$apiParameters[$paramKey]['refersTo'],
                            "operator" => static::$apiParameters[$paramKey]['connection'][static::$apiParameters[$paramKey]['type']],
                            "value" => $paramValue
                        ];
                    }
                }
            // There was no matching parameter, add to the errors array and return the array
            } else {
                $prepApiData_array['errors'][] = "{$paramKey} is not a valid parameter!";
                break;
            }
        }
        // Return the array
        return $prepApiData_array;
    }

    // This function leverages the val_validation function.
    static function validate_api_params($value, $param) {

        // If there is a custom validation column then use it for validation
        if(isset(static::$apiParameters[$param]['validation'])){
            // Set the custom validation
            $customValidation = static::$apiParameters[$param]['validation'];
            // Validate based on the custom validation
            $errors = val_validation($value, $customValidation);
            // Return the validation errors array
            return $errors;

        // elseIf there is a default validation column then use it
        } elseif(isset(static::$validation_columns[static::$apiParameters[$param]['refersTo']])) {
            // Set the default validation
            $defaultValidation = static::$validation_columns[static::$apiParameters[$param]['refersTo']];
            // Validate based on the default validation
            $errors = val_validation($value, $defaultValidation);
            // Return the validation errors array
            return $errors;

        // else there were no validation defined. Return the error.
        } else {
            $errors[] = "Parameter: {$param} with Value: {$value} was rejected as there are no validation rules defined.";
            // Return the error
            return $errors;
        }
    }

    // create an associative array, key value pair from the static::$columns excluding id
    public function api_attributes() {
        // empty array to be filled below
        $attributes = [];
        // column and API attributes merge arrays
        $apiAttributes_array = array_merge(static::$columns, static::$apiProperties);
        // loop over and make a key value pair array of api attributes
        foreach ($apiAttributes_array as $attribute) {
            // construct attribute list with object values
            $attributes[$attribute] = $this->$attribute;
        }
        // return array of attributes
        return $attributes;
    }

    // get api data plus extended data
    public function get_full_api_data() {
        // get api data
        $data_array['properties'] = $this->api_attributes();
        // if of the correct type get categories, tags, or labels
        if ($this->ctr() == 1 || $this->ctr() == 2 || $this->ctr() == 3 || $this->ctr() == 4) {
            $data_array['categories'] = $this->get_obj_categories_tags_labels('categories');
            $data_array['tags'] = $this->get_obj_categories_tags_labels('tags');
            $data_array['labels'] = $this->get_obj_categories_tags_labels('labels');
        }
        // if of the correct type get all images
        if ($this->ctr() == 1 || $this->ctr() == 3) {
            // set blank array, set below
            $image_array = [];
            // get image(s)
            if ($this->ctr() == 1) {
                $temp_array = $this->get_post_images();
            } else {                                               
                $temp_array = $this->get_user_image();
            }
            // loop over info to make new array
            $image_array = obj_array_api_prep($temp_array);
            // put images into the correct spot
            $data_array['images'] = $image_array;
        }
        // return data
        return $data_array;
    }

    // get api data
    public function get_basic_api_data() {
        // get api data
        $data_array['properties'] = $this->api_attributes();
        // return data
        return $data_array;
    }

    // get data and turn it into json
    public function get_api_data($type = 'basic') {
        // check to see which api data to use
        if ($type == 'basic') {
            $data_array = $this->get_basic_api_data();
        } else {
            $data_array = $this->get_full_api_data();
        }
        // return the data array
        return $data_array;
    }

}

?>