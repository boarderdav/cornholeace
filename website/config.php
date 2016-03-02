<?php
require_once __DIR__ . '/src/Facebook/autoload.php';
//require_once("src/Facebook/autoload.php");
//require_once("src/Facebook/Facebook.php");  //include facebook sdk
##############Facebook API Configuration##############
$app_id = '686534241383052';
$app_secret = '49f3d3991c74d0e1101321c7d069a683';
$siteurl = 'http://new.cornholeace.com';
$fbPermissions = 'email'; //required facebook permissions
//$redirect_url='http://new.cornholeace.com/';

//Call Facebook API
$facebook = new \Facebook\Facebook([
    'app_id' => '686534241383052',  //$app_id,
    'app_secret' => '49f3d3991c74d0e1101321c7d069a683',  //$app_secret,
    'default_graph_version' => 'v2.5',
    //'cookie' => true
]);

$fbuser = $facebook->getUser();
?>
