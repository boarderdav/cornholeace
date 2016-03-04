<?php include('php/head.php');?>
<?php include('php/navigation.php');?>
<?php include('config.php');?>

<?php //include('fbdbconfig.php');?>
<?php //include('facebook_login.php');?>

<?php



//session_start();

//include "common.php";
//include_once "fbconnect.php";

//if (isset($_SESSION['user']))
//echo '<a href="logout.php" target="_blank" rel="nofollow">Logout</a>';
//else
//echo '<a href="$loginUrl" target="_blank" rel="nofollow">Login</a>';
//if(!isset($_SESSION['user']))
//{
//echo '<a href="$loginUrl" target="_blank" rel="nofollow"><img src="images/f-connect.png" alt="Connect to your Facebook Account"></a>';
//}
//else
//{
//$email = "'" . $_SESSION['user'] . "'";
//$query = sprintf("SELECT * FROM newmember WHERE email = %s",$email);
//$res = mysql_query($query) or die('Query failed: ' . mysql_error() . "<br>\n$sql");
//$row = mysql_fetch_array($res);
//echo $row['name'];
//echo "<b>   GENDER : </b>" . $row['gender'];
//echo "<b>   EMAIL : </b>" . $row['email'];
//}
//
//
//?>

<?php

//require './src/Facebook/facebook.php';

// Create our Application instance (replace this with your appId and secret).
//$facebook = new Facebook(array(
//    'appId'  => '686534241383052',
//    'secret' => '49f3d3991c74d0e1101321c7d069a683',
//    'cookie' => true));


// Get User ID
//$user = $facebook->getUser();
//
//
//if ($user) {
//try {
//// Proceed knowing you have a logged in user who's authenticated.
//$fbuid = $facebook->getUser();
//$user_profile = $facebook->api('/me');
//
//header('Location: user_page.php');
//
//} catch (FacebookApiException $e) {
//error_log($e);
//$user = null;
//}
//}
//
//
//// Login or logout url will be needed depending on current user state.
//if ($user) {
//$logoutUrl = $facebook->getLogoutUrl();
//
//} else {
//
//$loginUrl = $facebook->getLoginUrl(Array('scope'=>    'user_interests,user_activities,user_education_history,user_likes,user_about_me,   user_birthday, user_groups, user_hometown, user_work_history, email',
//'redirect_uri' => 'http://www.mywebpage.com/test/user_page.php')
//);
//}
//
//?>


<!-- Carousel ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="img/cornholeace%20specs_.jpg" width="100%" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>CornholeAce.com</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="img/cornhole2.png" width="100%" height="300px" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Dual-Sided Bags</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="img/cornhole3.png" width="100%" height="300px" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Dual-Sided Bags</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="fourth-slide" src="img/IMGP5526_.jpg" width="100%" height="300" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Dual-Sided Bags</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="fifth-slide" src="/img/cornhole1.png" width="100%" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>High Quality Cornhole Products</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->



<div id="status"></div>
<div id="status1"></div>
<div id="status2"></div>
<div id="status3"></div>



//added fb-callback.php code here
<?php
session_start();
require_once __DIR__ . '/src/Facebook/autoload.php';
$fb = new \Facebook\Facebook([
    'app_id' => '686534241383052',
    'app_secret' => '49f3d3991c74d0e1101321c7d069a683',
    'default_graph_version' => 'v2.5',
    'cookie' => true
]);

$helper = $fb->getRedirectLoginHelper();
try {
    $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
// When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
// When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (isset($accessToken)) {
// Logged in!
    $_SESSION['facebook_access_token'] = (string) $accessToken;

// Now you can redirect to another page and use the
// access token from $_SESSION['facebook_access_token']
}

$user = $response->getGraphUser();

echo 'Name: ' . $user['name'];
// OR
// echo 'Name: ' . $user->getName();

?>

<a class="btn btn-block btn-social btn-facebook" href="<?php echo $loginURL; ?>">Login with Facebook</a>
<br>
<hr>
<a class="btn btn-block btn-social btn-facebook" href="<?php echo $logoutURL; ?>">Logout</a>



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<br>
<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-md-4 text-center">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h1 style="font-family:Vipnagorgialla" class="text-danger" >Cornhole Ace</h1><h4 style="color:white">_</h4>
            <h3 style="font-family:Lato-light">CornholeAce provides the best quality cornhole bags and boards the industry has ever seen! </h3>
            <p><a class="btn btn-danger" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 text-center">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h1 class="blueColor" style="font-family:Vipnagorgialla">Cornhole Bags</h1>
            <h3 style="font-family:Lato-light">We provide a super high-quality dual-sided cornhole bags. Top quality fabric, with resin-filled weatherproof materials makes this the best cornhole bags on the market.  </h3>
            <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 text-center">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h1 class="blueColor" style="font-family:Vipnagorgialla">Cornhole Boards</h1>
            <h3 style="font-family:Lato-light">We supply the highest quality cornhole boards the industry has ever seen. </h3>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!--    Facebook integration add like button for testing -->
    <div
        class="fb-like"
        data-share="true"
        data-width="450"
        data-show-faces="true">
    </div>


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row">
        <div class="col-xs-6">
            <a href="#" class="img-caption">
                <figure>
                    <img src="img/cornhole-bags.jpg" width="100%"/>
                    <figcaption class="moveUp">
                        <h3 class="noMargin" width="100%">Cornhole Bags</h3>
                        <span>The best quality on the market!</span>
                    </figcaption>
                </figure>
            </a>
        </div>

        <div class="col-xs-6">
            <a href="#" class="img-caption">
                <figure>
                    <img src="img/cornhole-bags.jpg" width="100%"/>
                    <figcaption class="moveUp">
                        <h3 class="noMargin" width="100%">Cornhole Boards</h3>
                        <span>The best quality on the market!</span>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading blueColor">Dual-Sided Cornhole Bags <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">We provide a super high-quality dual-sided cornhole bags. Top quality fabric, with resin-filled weatherproof materials makes this the best cornhole bags on the market.  </p>
        </div>
        <div class="col-md-5">
            <a href="#" class="img-caption">
                <figure>
                    <img src="img/CornholeAce-Package-top.jpg" width="100%"/>
                    <figcaption class="moveUp">
                        <h3 class="noMargin" width="100%">Cornhole Bags</h3>
                        <span>The best quality on the market!</span>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-5">
            <a href="#" class="img-caption">
                <figure>
                    <img src="img/cornhole011.JPG" width="100%"/>
                    <figcaption class="moveUp">
                        <h3 class="noMargin" width="100%">Cornhole Bags</h3>
                        <span>The best quality on the market!</span>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading blueColor">Dual-Sided Cornhole Bags <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">We provide a super high-quality dual-sided cornhole bags. Top quality fabric, with resin-filled weatherproof materials makes this the best cornhole bags on the market.  </p>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading blueColor">Dual-Sided Cornhole Bags <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">We provide a super high-quality dual-sided cornhole bags. Top quality fabric, with resin-filled weatherproof materials makes this the best cornhole bags on the market.  </p>
        </div>
        <div class="col-md-5">
            <a href="#" class="img-caption">
                <figure>
                    <img src="img/CornholeAce-Package-top.jpg" width="100%"/>
                    <figcaption class="moveUp">
                        <h3 class="noMargin" width="100%">Cornhole Bags</h3>
                        <span>The best quality on the market!</span>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Tailgating Sports, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

</div><!-- /.container -->

<?php include('php/footernew.php');?>
