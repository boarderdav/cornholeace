<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '686534241383052',
            xfbml      : true,
            version    : 'v2.5'
        });
    };







    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));





    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            // the user is logged in and has authenticated your
            // app, and response.authResponse supplies
            // the user's ID, a valid access token, a signed
            // request, and the time the access token
            // and signed request each expire
            var uid = response.authResponse.userID;
            var accessToken = response.authResponse.accessToken;
        } else if (response.status === 'not_authorized') {
            // the user is logged in to Facebook,
            // but has not authenticated your app
        } else {
            // the user isn't logged in to Facebook.
        }
    });



</script>

<html>
<head>

</head>


<body>


<script>
    // Only works after `FB.init` is called
    function myFacebookLogin() {
        FB.login(function(){}, {scope: 'publish_actions'});
    }
</script>
<button onclick="myFacebookLogin()">Login with Facebook</button>


<?php
//
//
//$fb = new Facebook\Facebook([
//    'app_id' => '686534241383052',
//    'app_secret' => '49f3d3991c74d0e1101321c7d069a683',
//    'default_graph_version' => 'v2.5',
//]);
//
//try {
//    // Returns a `Facebook\FacebookResponse` object
//    $response = $fb->get('/me?fields=id,name', '{access-token}');
//} catch(Facebook\Exceptions\FacebookResponseException $e) {
//    echo 'Graph returned an error: ' . $e->getMessage();
//    exit;
//} catch(Facebook\Exceptions\FacebookSDKException $e) {
//    echo 'Facebook SDK returned an error: ' . $e->getMessage();
//    exit;
//}
//
//$user = $response->getGraphUser();
//
//echo 'Name: ' . $user['name'];
//// OR
// echo 'Name: ' . $user->getName();
//
//
//
//?>

</body>
</html>
