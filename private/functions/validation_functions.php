<?php

    // is_blank('abcd')
    // * validate data presence
    // * uses trim() so empty spaces don't count
    // * uses === to avoid false positives
    // * better than empty() which considers "0" to be empty
    function is_blank($value) {
        return !isset($value) || trim($value) === '';
    }

    // has_presence('abcd')
    // * validate data presence
    // * reverse of is_blank()
    // * I prefer validation names with "has_"
    function has_presence($value) {
        return !is_blank($value);
    }

    // has_length_greater_than('abcd', 3)
    // * validate string length
    // * spaces count towards length
    // * use trim() if spaces should not count
    function has_length_greater_than($value, $min) {
        $length = strlen($value);
        return $length > $min;
    }

    // has_length_less_than('abcd', 5)
    // * validate string length
    // * spaces count towards length
    // * use trim() if spaces should not count
    function has_length_less_than($value, $max) {
        $length = strlen($value);
        return $length < $max;
    }

    // has_length_exactly('abcd', 4)
    // * validate string length
    // * spaces count towards length
    // * use trim() if spaces should not count
    function has_length_exactly($value, $exact) {
        $length = strlen($value);
        return $length == $exact;
    }

    // has_length('abcd', ['min' => 3, 'max' => 5])
    // * validate string length
    // * combines functions_greater_than, _less_than, _exactly
    // * spaces count towards length
    // * use trim() if spaces should not count
    function has_length($value, $options) {
        if(isset($options['min']) && !has_length_greater_than($value, $options['min'] - 1)) {
        return false;
        } elseif(isset($options['max']) && !has_length_less_than($value, $options['max'] + 1)) {
        return false;
        } elseif(isset($options['exact']) && !has_length_exactly($value, $options['exact'])) {
        return false;
        } else {
        return true;
        }
    }

    // has_inclusion_of( 5, [1,3,5,7,9] )
    // * validate inclusion in a set
    function has_inclusion_of($value, $set) {
        return in_array($value, $set);
    }

    // has_exclusion_of( 5, [1,3,5,7,9] )
    // * validate exclusion from a set
    function has_exclusion_of($value, $set) {
        return !in_array($value, $set);
    }

    // has_string('nobody@nowhere.com', '.com')
    // * validate inclusion of character(s)
    // * strpos returns string start position or false
    // * uses !== to prevent position 0 from being considered false
    // * strpos is faster than preg_match()
    function has_string($value, $required_string) {
        return strpos($value, $required_string) !== false;
    }

    // has_valid_email_format('nobody@nowhere.com')
    // * validate correct format for email addresses
    // * format: [chars]@[chars].[2+ letters]
    // * preg_match is helpful, uses a regular expression
    //    returns 1 for a match, 0 for no match
    //    http://php.net/manual/en/function.preg-match.php
    function has_valid_email_format($value) {
        $email_regex = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
        return preg_match($email_regex, $value) === 1;
    }

    // has_unique_username('johnqpublic')
    // * Validates uniqueness of admins.username
    // * For new records, provide only the username.
    // * For existing records, provide current ID as second argument
    //   has_unique_username('johnqpublic', 4)
    function has_unique_username($username, $current_id="0") {
        // Need to re-write for OOP
    }

  














    // val_validation('abcd', 'Post Title', ['type' => 'num'/'str'/'int', 'num_min' => 1, 'num_max' => 10, 'min' => 3, 'max' => 5, 'exact' => 5, 'required' => 'yes'/'no', 'html' => 'yes'/'no'/'full')
    // *** copy this if you need a reference, val_validation($value, ['name' => 'human readable name', 'type' => 'num'/'str'/'int', 'num_min' => 1, 'num_max' => 10, 'min' => 3, 'max' => 5, 'exact' => 5, 'required' => 'yes'/'no', 'html' => 'yes'/'no'/'full']);
    // * $value The value of the thing being checked
    // validate string length, min, max, exactly
    // Trims before checking
    function val_validation($value, $options = []) {

        // Set defaults
        $val_length = strlen(Trim($value));
        $value = Trim($value);
        $name = Trim($options['name']) ?? "Unknown Name";
        $errors = [];

        // Validate length min
        if(isset($options['min']) && $val_length < Trim($options['min'])) {
            $option_min = Trim($options['min']);
            // error message
            $errors[] = "The value \"{$name}\" needs to be at least {$option_min} characters long.";
        }

        // Validate length max
        if(isset($options['max']) && $val_length > Trim($options['max'])) {
            $option_max = Trim($options['max']);
            $length_over = $val_length - $option_max;
            // error message 
            $errors[] = "The value \"{$name}\" has a max length of {$option_max} characters. You are {$length_over} characters too long.";
        } 

        // Validate length exact
        if(isset($options['exact']) && $val_length !== Trim($options['exact'])) { 
            $option_exact = Trim($options['exact']);
            // main error message
            $errors[] = "The value \"{$name}\" requires an exact length of {$option_exact} characters. You have {$val_length} of characters.";
        }

        // Validating required
        if (isset($options['required']) && $options['required'] == "yes") {
            if (!isset($value) || trim($value) === '') {
                // error message
                $errors[] = "The value \"{$name}\" is a required value. This value was either not submitted or is blank.";
            }
        }

        // Validating type
        if (isset($options['type']) && $options['type'] == "num") {
            if (!is_numeric($value)) {
                // error message
                $errors[] = "The value \"{$name}\" must be a number.";
            }
        } elseif (isset($options['type']) && $options['type'] == "int") {
            // Convert string to number
            if (is_numeric($value)) {
                $value = strpos($value, '.') === false ? intval($value) : floatval($value);
                // var_dump(is_int($value));
                if (!is_int($value)) {
                    // error message
                    $errors[] = "The value \"{$name}\" must be a number and have no decimals.";
                }
            } else {
                // error message
                $errors[] = "The value \"{$name}\" must be a number and have no decimals.";
            }
        } elseif (isset($options['type']) && $options['type'] == "str") {
            if (!is_string($value)) {
                // error message
                $errors[] = "The value \"{$name}\" must be a string/text.";
            }
        }

        // Validating number value max
        if (isset($options['num_max']) && $value > $options['num_max']) {
                $num_max = $options['num_max'];
                // error message
                $errors[] = "The value of \"{$name}\" can not be larger than {$num_max}.";
        } 

        // Validating number value min
        if (isset($options['num_min']) && $value < $options['num_min']) {
            $num_min = $options['num_min'];
            // error message
            $errors[] = "The value of \"{$name}\" can not be less than {$num_min}.";
        }
        
        // Validating HTML I don't need to check it if it's blank
        if (trim($value) !== '') {
            // allowed HTML, not JavaScript
            if (isset($options['html']) && $options['html'] == "yes" ) {
                // Checking for restricted characters
                // uses !== to prevent position 0 from being considered false
                switch ($value) {
                    case strpos($value, '<script') !== false : $errors[] = no_html_message($name, "<script> tag"); return $validate;
                    case strpos($value, ';') !== false : $errors[] = no_html_message($name, ";"); return $validate;
                    case strpos($value, '\\') !== false : $errors[] = no_html_message($name, "\\"); return $validate;
                }
            } elseif (isset($options['html']) && $options['html'] == "no") {
                // Checking for HTML characters
                // uses !== to prevent position 0 from being considered false
                switch ($value) {
                    case strpos($value, '>') !== false || strpos($value, '<') !== false : $errors[] = no_html_message($name, "<"); return $validate;
                    case strpos($value, ')') !== false || strpos($value, '(') !== false : $errors[] = no_html_message($name, "("); return $validate;
                    case strpos($value, '[') !== false || strpos($value, ']') !== false : $errors[] = no_html_message($name, "["); return $validate;
                    case strpos($value, '{') !== false || strpos($value, '}') !== false : $errors[] = no_html_message($name, "{"); return $validate;
                    case strpos($value, '/') !== false : $errors[] = no_html_message($name, "/"); return $validate;
                    case strpos($value, '\\') !== false : $errors[] = no_html_message($name, "\\"); return $validate;
                    case strpos($value, ';') !== false : $errors[] = no_html_message($name, ";"); return $validate;
                }
            }
        }
      
        // return error array
        return $errors; 
    }

    // Quick message for no html
    function no_html_message($name, $val_in_question) {
        // return error message
        return "The value \"{$name}\" excludes certain types of html. The text in question is \" {$val_in_question} \".";
    }


    // Checking to see if it is a date
    function isDate($value, $name) {
        try {
            new \DateTime($value);
            // Passed validation message
            return NULL; 
        } catch (\Exception $e) {
            // return error message
            return "The value of \"{$name}\" must be a valid date. For example 1/6/18 or 2017-01-06.";
        }
    }
?>
