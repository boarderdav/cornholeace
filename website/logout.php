<?php 
session_start();
session_unset();

//FACEBOOK LOGOUT VARIABLES
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;

//TWITTER LOGOUT VARIABLES
    $_SESSION['TID'] = NULL;
    $_SESSION['data'] = NULL;
    $_SESSION['request_token'] = NULL;
    $_SESSION['request_token_secret'] = NULL;
header("Location: http://new.cornholeace.com/index.php");        // link to page you want to load ( "Location: " ."http://new.cornholeace.com");

?>


