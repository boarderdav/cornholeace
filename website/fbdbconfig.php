<?php

// database connection
define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'cornholeaws-test.c6sgbeek7pg2.us-east-1.rds.amazonaws.com');
define('DB_SERVER_USERNAME', 'cornhole');
define('DB_SERVER_PASSWORD', 'playthrowtoss');
define('DB_DATABASE', 'cornholeAWStest');

// site URL and facebook credentials
define("APP_ID", "686534241383052");
define("APP_SECRET", "49f3d3991c74d0e1101321c7d069a683");
/* make sure the url end with a trailing slash */
define("SITE_URL", "http://new.cornholeace.com/index.php/");
/* the page where you will be redirected after login */
define("REDIRECT_URL", SITE_URL."shop2.php");
/* Email permission for fetching emails. */
define("PERMISSIONS", "email");
define("FACEBOOK_SDK_V4_SRC_DIR", __DIR__ . "./src/Facebook/")


// create a facebook object
$facebook = new Facebook(array('appId' => '686534241383052', 'secret' => '49f3d3991c74d0e1101321c7d069a683'));
$userID = $facebook->getUser();

// Login or logout url will be needed depending on current user login state.
if ($userID) {
    $logoutURL = $facebook->getLogoutUrl(array('next' => SITE_URL . 'logout.php'));
} else {
    $loginURL = $facebook->getLoginUrl(array('scope' => PERMISSIONS, 'redirect_uri' => REDIRECT_URL));
}