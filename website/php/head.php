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


<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--<!--[if lt IE 9]><script src="../../vendor/twitter/bootstrap/docs/assets/js/ie8-responsive-file-warning.js"></script>[endif]-->
<!--<script src="../../vendor/twitter/bootstrap/docs/assets/js/ie-emulation-modes-warning.js"></script>-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Custom styles for this template -->


</head>

<body>



<!--Login Button Code generated for Medium Button-->



    <div id="fb-root"></div>

        <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '686534241383052', // Set YOUR APP ID
                channelUrl : 'http://new.cornholeace.com/login.php', // Channel File
                status     : true, // check login status
                cookie     : true, // enable cookies to allow the server to access the session
                xfbml      : true  // parse XFBML
            });

        };



        </script>



<script>
//    Syntax for FB.api()
function api() {
    FB.api('/me', function(response) {
        console.log(JSON.stringify(response));
    });
}




    //Syntax of FB.api()

    function getUserInfo() {
        FB.api('/me', function(response) {

            $.ajax({
                type: "POST",
                dataType: 'json',
                data: response,
                url: 'contact.php',
                success: function(msg) {
                    if(msg.error== 1)
                    {
                        alert('Something Went Wrong!');
                    } else {
                        console.log(JSON.stringify(response));
                        $('#fbstatus').show();
                        $('#fblogin').hide();
                        $('#fbname').text("Name : "+msg.name);
                        $('#fbemail').text("Email : "+msg.email);
                        $('#fbfname').text("First Name : "+msg.first_name);
                        $('#fblname').text("Last Name : "+msg.last_name);
                        $('#fbid').text("Facebook ID : "+msg.id);
                        $('#fbimg').html("<img src='http://graph.facebook.com/"+msg.id+"/picture'>");
                    }
                }
            });

        });
    }


    //Logout from facebook

    function FBLogout()
    {
        FB.logout(function(response) {
            $('#fblogin').show(); //showing login button again
            $('#fbstatus').hide(); //hiding the status
        });
    }




(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=686534241383052";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


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