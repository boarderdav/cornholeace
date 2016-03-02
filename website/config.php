<?php
require_once __DIR__ . '/src/Facebook/autoload.php';
require_once __DIR__ . '/src/Facebook/Facebook.php';
//require_once("src/Facebook/autoload.php");
//require_once("src/Facebook/Facebook.php");  //include facebook sdk
##############Facebook API Configuration##############
$app_id = '686534241383052';
$app_secret = '49f3d3991c74d0e1101321c7d069a683';
$siteurl = 'http://new.cornholeace.com/';
$redirecturl = 'http://new.cornholeace.com/index.php/';
$fbPermissions = 'email'; //required facebook permissions
//$redirect_url='http://new.cornholeace.com/';

//Call Facebook API
$facebook = new \Facebook\Facebook([
    'app_id' => '686534241383052',  //$app_id,
    'app_secret' => '49f3d3991c74d0e1101321c7d069a683',  //$app_secret,
    'default_graph_version' => 'v2.5',
    //'cookie' => true
]);

$helper = $facebook->getRedirectLoginHelper();
//$permissions = ['name','id','email'];
$userID = $facebook->getDefaultAccessToken();

//$fbuser = $facebook->getUser();

//Login & Logout url will need to be depdingon on current user login state.
if ($userID) {
    $logoutURL = $helper->getLogoutUrl(array('next' => $siteurl . 'logout.php'));
} else {
    $loginURL = $helper->getLoginUrl(array('scope' => $fbPermissions, 'redirect_uri' => $redirecturl));
}


?>
