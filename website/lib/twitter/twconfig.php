<?php

// part 1 definition
//require_once('./../twitter/abraham/twitteroauth/autoload.php');
//require_once('Oauth.php');

//include from packetcode/twitter-login

session_start();

require_once('Oauth.php');
require_once('TwitterOAuth.php');
require_once('TwitterAPIExchange.php');
require('./../../php/functionstw.php');

define('CONSUMER_KEY','8eoZljmUz5yaQjOLdH463iOCP');
define('CONSUMER_SECRET','2iljSQZ3X1EV1HsAacdrFxnmXJBEicDssDdvZ48n6jSe24tw2Q');
define('OAUTH_CALLBACK','http://shop.cornholeace.com/lib/twitter/twconfig.php');

// part 2 process
// 1. check for logout
// 2. check for user
// 3. check for callback

// 1. to handle logout request

if(isset($_GET['logout'])) {
    session_unset();
    $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

// 2. if user session not enabled then get the login url

if(!isset($_SESSION['data']) && !isset($_GET['oauth_token'])) {
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
    $request_token = $connection->getRequestToken(OAUTH_CALLBACK);

    if ($request_token) {
        $token = $request_token['oauth_token'];
        $_SESSION['request_token'] = $token;
        $_SESSION['request_token_secret'] = $request_token['oauth_token_secret'];

        $login_url = $connection->getAuthorizeURL($token);
        $_SESSION['LOGINURL'] = $login_url;
    }
}

// 3. if there is a callback url

if(isset($_GET['oauth_token'])) {
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['request_token'], $_SESSION['request_token_secret']);
    $access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
    if($access_token) {
        $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
        $params = array('include_entities'=>'false');
        $data = $connection->get('account/verify_credentials',$params);
//        $userInfo = $connection->get('users/show', array('screen_name' => 'PHPGang'));
        if($data) {
            $_SESSION['data'] = $data;
            $tid = $data->id;
            $name = $data->name;
            $screenName = $data->screen_name;
            $location = $data->location;
            $profileImage = $data->profile_image_url;
            $description = $data->description;
            $geo = $data->geo;
            $place = $data->place;
            $followersCount = $data->flolowers_count;
            $friendCount = $data->friend_count;
//            $login_url = $connection->getAuthorizeURL($token);

// ######### SESSION Variables Used for Twitter ######## //
            $_SESSION['TID'] = $tid;
            $_SESSION['NAME'] = $name;
            $_SESSION['SCREENNAME'] = $screenName;
            $_SESSION['location'] = $location;
            $_SESSION['PROFILEIMAGE'] = $profileImage;
            $_SESSION['DESCRIPTION'] = $description;
            $_SESSION['GEO'] = $geo;
            $_SESSION['PLACE'] = $place;
            $_SESSION['FOLLOWERSCOUNT'] = $followersCount;
            $_SESSION['FRIENDCOUNT'] = $friendCount;
//            $_SESSION['LOGINURL'] = $login_url;
            $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
           header("Location: http://shop.cornholeace.com/index.php");
//            header("Location: http://shop.cornholeace.com/index_.php");
//            header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
        }
    }
} else {
    $loginUrl = $_SESSION['LOGINURL'];
    header("Location: ".$_SESSION['LOGINURL']);
//    header("Location: http://shop.cornholeace.com/index_.php");
}

