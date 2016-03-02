<html>
<head>
    Testing for LOGIN.php page using Javascript SDK.
</head>
<body>

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

    function Login()
    {

        FB.login(function(response) {
            if (response.authResponse)
            {
                getUserInfo();
            } else {document.location.reload();}
            {
                console.log('User cancelled login or did not fully authorize.');
            }
        },{scope: 'email,user_photos,user_videos'});

    }

    function getUserInfo() {
        FB.api('/me', function(response) {

            var str="<b>Name</b> : "+response.name+"<br>";
            str +="<b>Link: </b>"+response.link+"<br>";
            str +="<b>Username:</b> "+response.username+"<br>";
            str +="<b>id: </b>"+response.id+"<br>";
            str +="<b>Email:</b> "+response.email+"<br>";
            str +="<input type='button' value='Get Photo' onclick='getPhoto();'/>";
            str +="<input type='button' value='Logout' onclick='Logout();'/>";
            document.getElementById("status").innerHTML=str;

        });
    }
    function getPhoto()
    {
        FB.api('/me/picture?type=normal', function(response) {

            var str="<br/><b>Pic</b> : <img src='"+response.data.url+"'/>";
            document.getElementById("status").innerHTML+=str;

        });

    }
    function Logout()
    {
        FB.logout(function(){document.location.reload();});
    }

    // Load the SDK asynchronously
    (function(d){
        var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement('script'); js.id = id; js.async = true;
        js.src = "//connect.facebook.net/en_US/all.js";
        ref.parentNode.insertBefore(js, ref);
    }(document));

</script>
<div align="center">
    <h2>Facebook OAuth Javascript Demo</h2>

<script>

//GOOD CODE BELOW HERE
    //    (function(d, s, id) {
//        var js, fjs = d.getElementsByTagName(s)[0];
//        if (d.getElementById(id)) return;
//        js = d.createElement(s); js.id = id;
//        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=686534241383052";
//        fjs.parentNode.insertBefore(js, fjs);
//    }(document, 'script', 'facebook-jssdk'));


//    function getloginstatus() {
//    FB.getLoginStatus(function(response) {
//        if (response.status === 'connected') {
//            // the user is logged in and has authenticated your
//            // app, and response.authResponse supplies
//            // the user's ID, a valid access token, a signed
//            // request, and the time the access token
//            // and signed request each expire
//            var uid = response.authResponse.userID;
//            var accessToken = response.authResponse.accessToken;
//        } else if (response.status === 'not_authorized') {
//            // the user is logged in to Facebook,
//            // but has not authenticated your app
//        } else {
//            // the user isn't logged in to Facebook.
//        }
//    });
//    }


</script>

<p><a href="#" onClick="logInWithFacebook()">Log In with the JavaScript SDK</a></p>

<p><a href="#" onClick="getloginstatus()">Get Login Status</a></p>

<!--<div id="fb-roots"></div>-->





<script>


</script>

<li style="padding-top:1em; padding-bottom:1em" class="fb-login-button" data-default-audience="friends" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="true"></li>
<br>
<button class="btn btn-primary" data-auto-login-link="true" onclick="Login();" id="login">LoginButton</button>
    <br>
<button class="btn btn-danger" data-auto-logout-link="true" onclick="Logout();" id="logout">LogoutButton</button>


</body>
</html>




