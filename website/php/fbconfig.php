<?php
session_start();
// added in v4.0.0
require_once 'autoloadfb.php';
require 'functions.php';  //working keep in schema
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '686534241383052','49f3d3991c74d0e1101321c7d069a683' );
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper('http://new.cornholeace.com/php/fbconfig.php' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me/', array('fields' => 'id,name,email,gender,age_range,devices,first_name,last_name,cover,picture{url,width,height,is_silhouette}') );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
     	$fbid = $graphObject->getProperty('id');         // To Get Facebook ID
 	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
        $fbgender = $graphObject->getProperty('gender'); // To Get Facebook gender
        $fbage = $graphObject->getProperty('age_range');   // To Get age_range
        $fbdevices = $graphObject->getProperty('devices'); // To Get device type like iOS Android
        $fbfname = $graphObject->getProperty('first_name');// To Get first name first_name
        $fblname = $graphObject->getProperty('last_name'); // To Get last name last_name
        $fbcover = $graphObject->getProperty('cover');     // To Get cover photo for user
        $fbpicture = $graphObject->getProperty('picture{url,width,height,is_silhouette}'); // To Get picture with various attributes
	/* ---- Session Variables -----*/
	    $_SESSION['FBID'] = $fbid;           
        $_SESSION['FULLNAME'] = $fbfullname;
	    $_SESSION['EMAIL'] =  $femail;
        $_SESSION['GENDER'] = $fbgender;
        $_SESSION['AGE'] = $fbage;
        $_SESSION['DEVICES'] =  $fbdevices;
        $_SESSION['FNAME'] = $fbfname;
        $_SESSION['LNAME'] = $fblname;
        $_SESSION['COVER'] =  $fbcover;
        $_SESSION['PICTURE'] =  $fbpicture;
//    checkuser($fbid,$fbfullname,$femail);  //This was causing an error. not allowing page to load

    /* ---- header location after session ----*/
//  header("Location: http://new.cornholeace.com/1353/functions.php");
  header("Location: http://new.cornholeace.com/index.php");

} else {
  $loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);
}
//test


?>