<?php
//require_once("config.php");  //include facebook sdk

require_once("src/Facebook/autoload.php");
require_once("src/Facebook/Facebook.php");  //include facebook sdk
include_once("src/Facebook/base_facebook.php");
##############Facebook API Configuration##############
$app_id = '686534241383052';
$app_secret = '49f3d3991c74d0e1101321c7d069a683';
$siteurl = 'http://new.cornholeace.com';
$fbPermissions = 'email'; //required facebook permissions
//$redirect_url='http://new.cornholeace.com/';

//Call Facebook API
$facebook = new \Facebook\Facebook(array(
    'app_id' => $app_id,
    'app_secret' => $app_secret,
    'cookie' => true
));

$fbuser = $facebook->getUser();

require_once("php/functions.php");
//destroy facebook session if user clicks reset
if(!$fbuser){
    $fbuser = null;
    $loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$siteurl, 'scope'=>$fbPermissions));
    $output = '<a href="'.$loginUrl.'"><img src="img/logo.png"></a>';
} else {
    $user_profile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
    $user = new Users();
    $user_data = $user->checkUser('facebook',$user_profile['id'],$user_profile['first_name'],$user_profile['last_name'],$user_profile['email'],$user_profile['gender'],$user_profile['locale'],$user_profile['picture']);
    if(!empty($user_data)){
        $output = '<h1>Facebook Profile Details </h1>';
        $output .= '<img src="'.$user_data['picture'].'">';
        $output .= '<br/>Facebook ID : ' . $user_data['oauth_uid'];
        $output .= '<br/>Name : ' . $user_data['fname'].' '.$user_data['lname'];
        $output .= '<br/>Email : ' . $user_data['email'];
        $output .= '<br/>Gender : ' . $user_data['gender'];
        $output .= '<br/>Locale : ' . $user_data['locale'];
        $output .= '<br/>You are logged in with : Facebook';
        $output .= '<br/>Logout from <a href="logout.php?logout">Facebook</a>';
    } else {
        $output = '<h3 style="color:red">Some problem occurred, please try again. </h3>';
    }
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login with FAcebook using PHP by David Jenkins</title>
    <style type="text/css">
        h1{font-family:Arial, Helvetica, sans-serif;color:#999999;}
    </style>
</head>
<body>
<?php echo $output; ?>
</body>
</html>


<?php
/* INCLUSION OF LIBRARY FILES */
//require_once( 'src/Facebook/PersistentData/FacebookSessionPersistentDataHandler.php');
//require_once( 'src/Facebook/FacebookRequest.php' );
//require_once( 'src/Facebook/FacebookResponse.php' );
//require_once( 'src/Facebook/Exceptions/FacebookSDKException.php' );
//require_once( 'src/Facebook/Exceptions/FacebookServerException.php' );
//require_once( 'src/Facebook/Helpers/FacebookRedirectLoginHelper.php');
//require_once( 'src/Facebook/Exceptions/FacebookAuthorizationException.php' );
//require_once( 'src/Facebook/GraphNodes/GraphObject.php' );
//require_once( 'src/Facebook/GraphNodes/GraphUser.php' );
//require_once( 'src/Facebook/GraphNodes/GraphSessionInfo.php' );
//require_once( 'src/Facebook/Authentication/AccessToken.php');
//require_once( 'src/Facebook/HttpClients/FacebookCurl.php' );
//require_once( 'src/Facebook/HttpClients/FacebookHttpClientInterface.php');
//require_once( 'src/Facebook/HttpClients/FacebookCurlHttpClient.php');
//
////* USE NAMESPACE */
//
//use Facebook\PersistentData\FacebookSessionPersistentDataHandler;
//use Facebook\FacebookRequest;
//use Facebook\FacebookResponse;
//use Facebook\Exceptions\FacebookSDKException;
//use Facebook\Exceptions\FacebookServerException;
//use Facebook\Helpers\FacebookRedirectLoginHelper;
//use Facebook\Exceptions\FacebookAuthorizationException;
//use Facebook\GraphNodes\GraphObject;
//use Facebook\GraphNodes\GraphUser;
//use Facebook\GraphNodes\GraphSessionInfo;
//use Facebook\Authentication\AccessToken;
//use Facebook\HttpClients\FacebookCurl;
//use Facebook\HttpClients\FacebookHttpClientInterface;
//use Facebook\HttpClients\FacebookCurlHttpClient;
//
///* 1 Stat Session */
// session_start();
////
//////2.Use app id,secret and redirect url
//// $app_id = '686534241383052';
//// $app_secret = '49f3d3991c74d0e1101321c7d069a683';
//// $redirect_url='http://new.cornholeace.com/';
////
//////3.Initialize application, create helper object and get fb sess
//// FacebookSession::setDefaultApplication($app_id,$app_secret);
//// $helper = new FacebookRedirectLoginHelper($redirect_url);
//// $sess = $helper->getSessionFromRedirect();
////
//////4. if fb sess exists echo name
//// if(isset($sess)){
////     //create request object,execute and capture response
////     $request = new FacebookRequest($sess, 'GET', '/me');
////     // from response get graph object
////     $response = $request->execute();
////     $graph = $response->getGraphObject(GraphUser::className());
////     // use graph object methods to get user details
////     $name= $graph->getName();
////     echo "hi $name";
//// }else{
////     //else echo login
////     echo '<a href='.$helper->getLoginUrl().'>Login with facebook</a>';
//// }
//
//session_start();
//require_once __DIR__ . '/src/Facebook/autoload.php';
//
//use Facebook\FacebookClient;
//
//$fb = new Facebook\Facebook([
//    'app_id' => '686534241383052',
//    'app_secret' => '49f3d3991c74d0e1101321c7d069a683',
//    'default_graph_version' => 'v2.5',
//    //'default_access_token' => '{access-token}', // optional
//]);
//
//// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
//   $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
////   $helper = $fb->getCanvasHelper();
////   $helper = $fb->getPageTabHelper();
//
//try {
//    // Get the Facebook\GraphNodes\GraphUser object for the current user.
//    // If you provided a 'default_access_token', the '{access-token}' is optional.
//    $response = $fb->get('/me');
//} catch(Facebook\Exceptions\FacebookResponseException $e) {
//    // When Graph returns an error
//    echo 'Graph returned an error: ' . $e->getMessage();
//    exit;
//} catch(Facebook\Exceptions\FacebookSDKException $e) {
//    // When validation fails or other local issues
//    echo 'Facebook SDK returned an error: ' . $e->getMessage();
//    exit;
//}
//
//$me = $response->getGraphUser();
//echo 'Logged in as ' . $me->getName();
?>
