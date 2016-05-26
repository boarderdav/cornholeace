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
define('OAUTH_CALLBACK','http://new.cornholeace.com/lib/twitter/twconfig.php');

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
           header("Location: http://new.cornholeace.com/index.php");
//            header("Location: http://new.cornholeace.com/index_.php");
//            header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
        }
    }
} else {
    $loginUrl = $_SESSION['LOGINURL'];
    header("Location: ".$_SESSION['LOGINURL']);
//    header("Location: http://new.cornholeace.com/index_.php");
}


// PART 3 - FRONT END CODE

//if(isset($_SESSION['LOGINURL']) && !isset($_SESSION['data'])) {
//    echo "<a href='{$_SESSION['LOGINURL']}'><button>Login with twitter </button></a>";
//
//} else {
//    echo "you are logged in<br>";
//    $data = $_SESSION['data'];

//   $userName = $data->screen_name;
//    $_SESSION['userName'] = $userName;
//    $_SESSION['userName'] = $data->screen_name;

//    echo "screen name using username screenName variable " . $screenName . "<br>";
//    echo "_SESSION['NAME'] : " . $_SESSION['NAME'] . "<br>";
//    echo "Name: " . $data->name . "<br>";  //working
//    echo "FriendCount: " . $data->friend_count . "<br>";
//    echo "Location: " . $data->location . "<br>";
//    echo "Username: " . $data->screen_name . "<br>";  //working
//    echo "Photo: <img src='" . $data->profile_image_url . "'/><br><br>";
//    echo "access token" . $data->access_token . "<br>";
//    echo "<a href='?logout=true'><button>Logout</button></a>";
//    echo "<h2> UserID " . $_SESSION['name'];
//    echo "<h2> ScreenName " . $_SESSION['screen_name'];
//    echo "<a href='https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=BucketBallGame'><button>twitter button</button></a>";
//    echo "my name is " . $data . "<br>";
//
//}

//    echo "<h2> profileImage <img src='".$_SESSION['profile_image_url']"'/>";

//$tweet = $connection->get('friends/list', array('screen_name' => 'BucketBallGame'));
//$json = json_encode($tweet);
//$array = json_decode($json, true);
//shuffle($array);
//if (is_array($array)) {
//    foreach ($array as $value) {
//        if (is_array($value)) {
//            foreach ($value as $key => $second) {
//                if (is_array($second)) {
//                    foreach ($second as $key_second => $third) if ($key_second != 'profile_image_url') {
//                        unset($key_second);
//                    } else {
//                        echo "<img src='" . $third . "' width='100' height='100'/>";
//                    }
//                }
//            }
//        }
//    }
//}




//ini_set('display_errors', 1);
//require_once('TwitterAPIExchange.php');
//
///** Set access tokens here - see: https://dev.twitter.com/apps/ **/
//$settings = array(
//    'oauth_access_token' => "3004707406-uRK9kkoKRvXcfDL6EI6oB9DeAFpp5NZdWqtTksd",
//    'oauth_access_token_secret' => "3gaCDrsSOfUHWPJzJb3ZohEu6mQQtNZztDWsAOIKzo2Dh",
//    'consumer_key' => "8eoZljmUz5yaQjOLdH463iOCP",
//    'consumer_secret' => "2iljSQZ3X1EV1HsAacdrFxnmXJBEicDssDdvZ48n6jSe24tw2Q"
//);
//
//$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
//$requestMethod = "GET";
//if (isset($_GET['user']))  {$user = $_GET['user'];}  else {$user  = "BucketBallGame";}
//if (isset($_GET['count'])) {$count = $_GET['count'];} else {$count = 20;}
//$getfield = "?screen_name=$user&count=$count";
//$twitter = new TwitterAPIExchange($settings);
//$string = json_decode($twitter->setGetfield($getfield)
//    ->buildOauth($url, $requestMethod)
//    ->performRequest(),$assoc = TRUE);
//if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
//foreach($string as $items)
//{
//    echo "Time and Date of Tweet: ".$items['created_at']."<br />";
//    echo "Tweet: ". $items['text']."<br />";
//    echo "Tweeted by: ". $items['user']['name']."<br />";
//    echo "Screen name: ". $items['user']['screen_name']."<br />";
//    echo "Followers: ". $items['user']['followers_count']."<br />";
//    echo "Friends: ". $items['user']['friends_count']."<br />";
//    echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
//}



///** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
//$url = 'https://api.twitter.com/1.1/blocks/create.json';
//$requestMethod = 'POST';
///** POST fields required by the URL above. See relevant docs as above **/
//$postfields = array(
//    'screen_name' => 'usernameToBlock',
//    'skip_status' => '1'
//);
///** Perform a POST request and echo the response **/
//$twitter = new TwitterAPIExchange($settings);
//echo $twitter->buildOauth($url, $requestMethod)
//    ->setPostfields($postfields)
//    ->performRequest();
//
//
///** Perform a GET request and echo the response **/
///** Note: Set the GET field BEFORE calling buildOauth(); **/
//$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
//$requestMethod = "GET";
//$getfield = '?screen_name=iagdotme&count=20';
//$twitter = new TwitterAPIExchange($settings);
//$string = json_decode($twitter->setGetfield($getfield)
//    ->buildOauth($url, $requestMethod)
//    ->performRequest(),$assoc = TRUE);
//
//if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
//echo "<pre>";
//print_r($string);
//echo "</pre>";
//




//    $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
//    $requestMethod = "GET";
//    if (isset($_SESSION['data'])) {$data = $_SESSION['data'];} else {'000';}
//    $getfield = "?screen_name=BucketBallGame";
//    $twitter = new TwitterOauth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['request_token'], $_SESSION['request_token_secret']);
//    $string = json_decode($twitter->setGetfield($getfield)
//    ->buildOauth($url, $requestMethod)
//    ->performRequest(),$assoc = TRUE);
//    if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
//    foreach($string as $items) {
//        echo "screen_name " . $items['screen_name'] . "<br/>";
//        echo "description " . $items['description'] . "<br/>";
//    }


//    $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
//    $requestMethod = "GET";
//    if (isset($_GET['user']))  {$user = $_GET['user'];}  else {$user  = "BucketBallGame";}
//    if (isset($_GET['count'])) {$count = $_GET['count'];} else {$count = 20;}
//    $getfield = "?screen_name=$user&count=$count";
//    $twitter = new TwitterAPIExchange($settings);
//    $string = json_decode($twitter->setGetfield($getfield)
//        ->buildOauth($url, $requestMethod)
//        ->performRequest(),$assoc = TRUE);
//    if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
//    foreach($string as $items)
//    {
//        echo "Time and Date of Tweet: ".$items['created_at']."<br />";
//        echo "Tweet: ". $items['text']."<br />";
//        echo "Tweeted by: ". $items['user']['name']."<br />";
//        echo "Screen name: ". $items['user']['screen_name']."<br />";
//        echo "Followers: ". $items['user']['followers_count']."<br />";
//        echo "Friends: ". $items['user']['friends_count']."<br />";
//        echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
//    }


//curl request

//$trends_url = "http://api.twitter.com/1/statuses/followers/BucketBallGame.json";
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, $trends_url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//$curlout = curl_exec($ch);
//curl_close($ch);
//$response = json_decode($curlout, true);
//foreach($response as $friends) {
//    $thumb = $friends['profile_image_url'];
//    $url = $friends['screen_name'];
//    $name = $friends['name'];
//
//    print "<a title='" . $name . "' href='http://www.twitter.com/" . $url . "'>" . "<img src='" . $thumb . "' /></a>";


