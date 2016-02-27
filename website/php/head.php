<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">

<title>CornholeAce Ecommerce Website</title>

<!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/cornholeace.css" rel="stylesheet">
<link href="../css/site.css" rel="stylesheet">


<!--FontAwesome CSS link    -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="../../vendor/twitter/bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--<!--[if lt IE 9]><script src="../../vendor/twitter/bootstrap/docs/assets/js/ie8-responsive-file-warning.js"></script>[endif]-->
<!--<script src="../../vendor/twitter/bootstrap/docs/assets/js/ie-emulation-modes-warning.js"></script>-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Custom styles for this template -->
<link href="carousel.css" rel="stylesheet"> <!-- need to resolve or get rid of -->

</head>

<body>

<!--Login Button Code generated for Medium Button-->
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=686534241383052";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<!--<script>-->
<!--    window.fbAsyncInit = function() {-->
<!--        FB.init({-->
<!--            appId      : '686534241383052',-->
<!--            xfbml      : true,-->
<!--            version    : 'v2.5'-->
<!--        });-->
<!--    };-->
<!---->
<!--    (function(d, s, id){-->
<!--        var js, fjs = d.getElementsByTagName(s)[0];-->
<!--        if (d.getElementById(id)) {return;}-->
<!--        js = d.createElement(s); js.id = id;-->
<!--        js.src = "//connect.facebook.net/en_US/sdk.js";-->
<!--        fjs.parentNode.insertBefore(js, fjs);-->
<!--    }(document, 'script', 'facebook-jssdk'));-->
<!--</script>-->

<script>
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
            // Logged into your app and Facebook.
            testAPI();
        } else if (response.status === 'not_authorized') {
            // The person is logged into Facebook, but not your app.
            document.getElementById('status').innerHTML = 'Please log ' +
                'into this app.';
        } else {
            // The person is not logged into Facebook, so we're not sure if
            // they are logged into this app or not.
            document.getElementById('status').innerHTML = 'Please log ' +
                'into Facebook.';
        }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '686534241383052',
            oauth      : true,
            status     : true, // check login status
            cookie     : true,  // enable cookies to allow the server to access
                                // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.5' // use graph api version 2.5
        });

        // Now that we've initialized the JavaScript SDK, we call
        // FB.getLoginStatus().  This function gets the state of the
        // person visiting this page and can return one of three states to
        // the callback you provide.  They can be:
        //
        // 1. Logged into your app ('connected')
        // 2. Logged into Facebook, but not your app ('not_authorized')
        // 3. Not logged into Facebook and can't tell if they are logged into
        //    your app or not.
        //
        // These three cases are handled in the callback function.

        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });

    };

    // Load the SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));



    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
            console.log('Successful login for: ' + response.name);
            document.getElementById('status').innerHTML =
                'Thanks for logging in, ' + response.name + '!';
        });
    }


    //NEW DAVID CODE ADDED AFTER


    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });

    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    FB.login(function(response) {
        // handle the response
    }, {scope: 'public_profile,email'});

    FB.login(function(response) {
        if (response.status === 'connected') {
            // Logged into your app and Facebook.
        } else if (response.status === 'not_authorized') {
            // The person is logged into Facebook, but not your app.
        } else {
            // The person is not logged into Facebook, so we're not sure if
            // they are logged into this app or not.
        }
    });




    ///Step 5    new code used from artatm.com

    if(!isset($_SESSION['user'])) {
        $app_id = "686534241383052";
        $app_secret = "49f3d3991c74d0e1101321c7d069a683";
        $site_url = "http://new.cornholeace.com";


    }

////Step 6
//    $facebook = new Facebook(array(
//            'appId'        => $app_id,
//            'secret'    => $app_secret,
//    ));
//    $user = $facebook->getUser();
//
//
////Step 7
//    if($user){
//        // Get logout URL
//        $logoutUrl = $facebook->getLogoutUrl();
//    }else{
//        // Get login URL
//        $loginUrl = $facebook->getLoginUrl(array(
//                    'scope'            => 'read_stream, publish_stream, user_about_me, email',
//                'redirect_uri'    => $site_url,
//    ));
//    }


//    if($user) {
//
//        try {
//            $user_profile = $facebook - > api('/me');
//        }
//    }


</script>


<!-- PHP Function for FAcebook stuff added here....outside of javascript fuctions -->
<?php
////added from Retrieve User Profile via the Graph API -
//$fb = new Facebook\Facebook([
//'app_id' => '686534241383052',
//'app_secret' => '49f3d3991c74d0e1101321c7d069a683',
//'default_graph_version' => 'v2.5',
//]);
//
//try {
//// Returns a `Facebook\FacebookResponse` object
//$response = $fb->get('/me?fields=id,name', '{access-token}');
//} catch(Facebook\Exceptions\FacebookResponseException $e) {
//echo 'Graph returned an error: ' . $e->getMessage();
//exit;
//} catch(Facebook\Exceptions\FacebookSDKException $e) {
//echo 'Facebook SDK returned an error: ' . $e->getMessage();
//exit;
//}
//
//$user = $response->getGraphUser();
//
//echo 'Name: ' . $user['name'];
//// OR
//// echo 'Name: ' . $user->getName();
//
//
//?>



<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<!--<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">-->
<!--</fb:login-button>-->



<!--<div id="status">-->
<!--</div>-->