<html>
<head>
    testing
</head>
<body>


<p><a href="#" onClick="logInWithFacebook()">Log In with the JavaScript SDK</a></p>

<script>
logInWithFacebook = function() {
    FB.login(function(response) {
        if (response.authResponse) {
            alert('You are logged in &amp; cookie set!');
            // Now you can redirect the user or do an AJAX request to
            // a PHP script that grabs the signed request from the cookie.
        } else {
            alert('User cancelled login or did not fully authorize.');
        }
    });
    return false;
};
  window.fbAsyncInit = function() {
      FB.init({
      appId: '686534241383052',
      cookie: true, // This is important, it's not enabled by default
      version: 'v2.2'
    });
  };

  (function(d, s, id){
      var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>


//$fb = new Facebook\Facebook([
//    'app_id' => '686534241383052', // Replace {app-id} with your app id
//    'app_secret' => '49f3d3991c74d0e1101321c7d069a683',
//    'default_graph_version' => 'v2.2',
//]);
//
//$helper = $fb->getRedirectLoginHelper();
//
//$permissions = ['email']; // Optional permissions
//$loginUrl = $helper->getLoginUrl('http://new.cornholeace.com/fb-callback.php', $permissions);
//
//echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
//
//?>


