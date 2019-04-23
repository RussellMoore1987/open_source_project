<?php
    // include main logic for all pages
    require_once('../../../private/initialize.php');

    // Check to make sure that the Query_String is defined
    if (isset($_SERVER['REQUEST_URI'])) {
        // set up the router
        $Router = new ApiRouter($_SERVER['REQUEST_URI']);

    // If the QUERY_STRING is not defined then pass a null value
    } else {
        // set up the router
        $Router = new ApiRouter(NULL);
    }

    // execute output based off of route
    $Router->output();
?>
