<?php

    /*
     * Configures pages.(handles: errors, warnings, notices;
                                  constants and functions;
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("constants.php");
    require("functions.php");

    // enable sessions
    session_start();

?>
