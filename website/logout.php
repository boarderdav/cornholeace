<?php 
session_start();
session_unset();
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
header("Location: http://new.cornholeace.com/index.php");        // link to page you want to load ( "Location: " ."http://new.cornholeace.com");
?>