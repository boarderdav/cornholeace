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
header("Location: http://shop.cornholeace.com/index.php");        // link to page you want to load ( "Location: " ."http://shop.cornholeace.com");
<<<<<<< HEAD
=======

>>>>>>> ac1108f992595882f82378fa3c52da27b633f34c
?>


