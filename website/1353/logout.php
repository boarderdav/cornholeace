<?php 
session_start();
session_unset();
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
header("Location: http://new.cornholeace.com/1353/index.php");        // you can enter home page here ( Eg : header("Location: " ."http://new.cornholeace.com");
?>
