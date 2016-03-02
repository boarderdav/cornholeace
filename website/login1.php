# login1.php
<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
</head>
<body>
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


//getPhoto function that retrieves user profile and also gets userName in same function
  function getPhoto() {
      FB.api('/me/picture?type=normal', function(response) {

          var str="<br/><b>Pic of "+response.name+"</b> : <img src='"+response.data.url+"'/>";
          document.getElementById("status1").innerHTML+=str;

      });

      FB.api('/me', function(response) {
          document.getElementById("status2").innerHTML =
              'this picture is of ' + response.name + '!';

      });

  }

  //getName custom function to display user full name and uses id="status3" to include inside
  function getName() {
      FB.api('/me', function(response) {
          document.getElementById('status3').innerHTML =
          'getName function works for' + response.name + '!';
          console.log(response.name);
    });
  }




</script>



<!--
Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<li style="padding-top:1em; padding-bottom:1em" class="fb-login-button" data-default-audience="friends" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="true"></li>

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<button class="btn btn-danger" onclick="getPhoto()">Click to show photo and name</button><br>
<button class="btn btn-danger" onclick="getName()">Click to getName</button>

<div id="status"></div>
<div id="status1"></div>
<div id="status2"></div>
<div id="status3"></div>


</body>
</html>