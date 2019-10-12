










<?php
    // include traits
    require_once('devToolGetter.trait.php');
    class DevTool {
        // @ use traits start
         use DevToolGetter;
         use MainSettings;
        // @ use traits end

        // @ main methods start
        // # devTool request
            static public function request($method, $requestData) {
                // do validation here to make sure that they are logged in
                
                // the method check was done previously
                // call method
                $requestInfo = self::$method($requestData);

                // return request info
                return $requestInfo;
            }

            // # devTool_login
            static public function devTool_login($requestData) {
                // var_dump($request);
                // set up default variables
                $requestInfo = [];
                
                // get request password
                $requestPassword = $requestData['password'] ?? '';
                // get request username
                $requestUsername = $requestData['username'] ?? '';
                // get devTool password
                // devTool password, has to be at least eight characters long and have one capital letter, one lowercase letter, one number, and one special symbol, otherwise it doesn't work
                $devToolPassword = self::$mainContextInfo['devTool']['password'];
                // get devTool username
                $devToolUsername = self::$mainContextInfo['devTool']['username'];
                // is the password set
                if (trim(strlen($devToolPassword)) > 0) {
                    // does it pass internal validation requirements, if no errors let it pass
                    if (!validate_password($devToolPassword)) {
                        // password check
                        if ($requestPassword === $devToolPassword && $requestUsername === $devToolUsername) {
                            // TODO: set up session, do session protection as well

                        } else {
                            // pass back error message
                            $requestInfo['errors'][] = 'The password and/or username is incorrect.';
                        }
                    } else {
                        // pass back error message
                        $requestInfo['errors'][] = 'The password and/or username have not been set up correctly within the system.';
                        // ? uncomment at this line below to see the real error message(s)
                        // exit(print_r(validate_password($devToolPassword)));
                    }
                } else {
                    // pass back error message
                    $requestInfo['errors'][] = 'The password and/or username have not been set up for this corporation. No access will be granted to the dev tools until it is set up.';
                }
                
                
                // return request info
                return $requestInfo;
            }
        // @ main methods end

        // @ layouts start
            // latest post layout
            public function layout_devTool() {
                include PRIVATE_PATH . "/classes/devTool/devTool.php";
            }
        // @ layouts end  
    }
?>