<!DOCTYPE html>
<html lang="en">
  <head>


<?php
session_start();
require_once __DIR__ . '/src/Facebook/autoload.php';

// LOCALHOST SETUP FOR MYSQL
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "facebook";

$servername = "cornholeaws-test.c6sgbeek7pg2.us-east-1.rds.amazonaws.com";
$username = "cornhole";
$password = "playthrowtoss";
$dbname = "cornholeAWStest";

//Create connection
$db = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

echo "MySQL cornhole Database $servername Connected successfully with new configuration";

$fb = new Facebook\Facebook([
    'app_id' => '686534241383052',
    'app_secret' => '49f3d3991c74d0e1101321c7d069a683',
    'default_graph_version' => 'v2.5',
    'cookie' => true
]);

$helper = $fb->getRedirectLoginHelper();
//$helper = $fb->getJavaScriptHelper();

$permissions = ['email', 'public_profile', 'user_friends'];  //Optional permissions

try {
//    $accessToken = $helper->getAccessToken();
    if (isset($_SESSION['localhost_app_token'])) {
        $accessToken = $helper->getAccessToken();
    } else {
        $accessToken = $helper->getAccessToken();
    }
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}



if (isset($accessToken)) {
    if (isset($_SESSION['localhost_app_token'])) {
        $fb->setDefaultAccessToken($_SESSION['localhost_app_token']);
        exit;
    } else {
        // getting short-lived access token
        $_SESSION['localhost_app_token'] = (string) $accessToken;

        // OAuth 2.0 client handler
        $oAuth2Client = $fb->getOAuth2Client();

        // Exchanges a short-lived access token for a long-lived one
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['localhost_app_token']);

        $_SESSION['localhost_app_token'] = (string) $longLivedAccessToken;

        // setting default access token to be used in script
        $fb->setDefaultAccessToken($_SESSION['localhost_app_token']);
    }

    // redirect the user  back to the same page if it has "code" GET variable
    if (isset($_GET['code'])) {
        header('Location: ./');
    }

    // getting basic info about user
    try {
        $profile_request = $fb->get('/me?fields=email,public_profile,user_friends');    // '/me?fields=id,name', '{accessToken}'
        $profile = $profile_request->getGraphNode()->asArray();  //used to be getGraphicNode
    } catch(\Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        session_destroy();
        //redirecting user back to app login page
        header("Location: ./");
        exit;
    } catch(\Facebook\Exceptions\FacebookSDKException $e) {
        //Wen validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    //printing $profile array on the screen which holds the basic info about user
    //echo $profile['name'];
    print_r($profile);
    echo "hello there new user person"; //$profile['name'];

    $name = $profile['name'];
    $first_name = $profile['first_name'];

    $sql = "INSERT INTO cornholeAWStest.users (name, email)
    VALUES ('{$name}', '{$email}')";  // '{$name}', '{email}', '{$accessToken}'

    if ($db->query($sql) === TRUE) {
        echo "New Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

$db->close();




    // Now you can redirect to another pate an use the access token from $_SESSION['localhost_app_token']
} else {
    // replace yoru website URL same as added in teh developer.facebook.com/apps e.g. if you used http instead of https and you used non-www version or www version of your website then you must add the same here
    $loginUrl = $helper->getLoginUrl('http://new.cornholeace.com/index.php', $permissions); // worked with index.php
    echo '<br><a href="' . $loginUrl . '">Log in with Facebook!</a>';
}





?>
      <!-- Bootstrap core CSS -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/cornholeace.css" rel="stylesheet">
      <link href="../css/site.css" rel="stylesheet">


      <!--FontAwesome CSS link    -->
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

      <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  
    
  </head> 
  <body>
<br><br><br><br><br>
<hr>

    <!-- Testimonial Section
    ==================================-->
    <div id="en-testimonials" class="testimonial color">
        <div class="overlay text-center">
            <div class="container">

                <div id="testimonial" class="owl-carousel owl-theme"> <!-- Testimonial Slider Wrap -->
                    <div class="item">
                        <blockquote>" John is the owner of Hopke and Associates Architectural firm and professional architect in Virginia.  His brain is an ocean of ideas and creativeness, and he loves expressing and sharing those ideas with his architectural creations."
                        <footer>John, Hopke & Associates</footer>
                        </blockquote>
                    </div>

                    <div class="item">
                        <blockquote>" Highground is one of the best companies in the world and is the perfect company for every job they've ever bid on.  "
                            <footer>C. Bailey, Engineering Excellence</footer>
                        </blockquote>
                    </div>

                    <div class="item">
                        <blockquote>" Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. "
                        <footer>David, Web Developer Enterprise</footer>
                        </blockquote>
                    </div>
                </div><!-- End Testimonial Slider Wrap -->

            </div>
        </div>
    </div>

    <!-- News Section
    ========================-->
    <div id="en-news">
        <div class="container">

            <div class="section-title text-center"><!-- Centered Section Title -->
                <h2>Latest News</h2>
                <hr>
                <p>Here are some of the Latest News items in the Highgrond World. </p>
                <a class="read-more" href="awards.php">View All News <span class="fa fa-chevron-circle-right"></span></a>
            </div>

            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="news">  <!-- Blog Post/News #1 -->
                        <span class="meta-date"><i class="fa fa-calendar"></i> March 25, 2015</span>
                        <a href="single-blog.php"><h4>Map Out And Show Appealing Business Design Layouts</h4></a>
                        <hr>
                        <p class="meta">
                            <span class="meta-tags">
                                <i class="fa fa-tags"></i> 
                                <a href="#">Construction</a>
                            </span> 
                            <span class="meta-comments">
                                <i class="fa fa-comments"></i> 
                                <a href="">20 Comments</a>
                            </span>
                        </p>
                        <p>So you want to put up a business? Before you proceed, where do the funds come from? Would you take out a loan? Do you have the sufficient funds to settle all potential obligations and expenses in setting up your dream company?...</p>
                        <a class="read-more" href="single-blog.php">Read More <span class="fa fa-chevron-circle-right"></span></a>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="news">  <!-- Blog Post/News #2 -->
                        <span class="meta-date"><i class="fa fa-calendar"></i> March 12, 2015</span>
                        <a href="single-blog.php"><h4>Construction Going Green - Green Engineering/h4></a>
                        <hr>
                        <p class="meta">
                            <span class="meta-tags">
                                <i class="fa fa-tags"></i> 
                                <a href="#">Engineering</a>
                            </span> 
                            <span class="meta-comments">
                                <i class="fa fa-comments"></i> 
                                <a href="">6 Comments</a>
                            </span>
                        </p>
                        <p>Our planet is really feeling the heat of Global Warming. Humans are consuming resources like never before. A new coal-fired power plant is built in China EVERY WEEK! This all signifies that consumption of raw materials will keep on increasing...</p>
                        <a class="read-more" href="single-blog.php">Read More <span class="fa fa-chevron-circle-right"></span></a>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="news">  <!-- Blog Post/News #3 -->
                        <span class="meta-date"><i class="fa fa-calendar"></i> March 6, 2015</span>
                        <a href="single-blog.php"><h4>Combination Engineering & Construction Firms - Top 10 Benefits</h4></a>
                        <hr>
                        <p class="meta">
                            <span class="meta-tags">
                                <i class="fa fa-tags"></i> 
                                <a href="#">Engineering</a>,
                                <a href="#">Construction</a>
                            </span> 
                            <span class="meta-comments">
                                <i class="fa fa-comments"></i> 
                                <a href="">2 Comments</a>
                            </span>
                        </p>
                        <p>It has always been a debate whether to use an individual design and construction firm.  Highground is your one-stop shop engineering and construction firm that offers so muhc more...</p>
                        <a class="read-more" href="single-blog.php">Read More <span class="fa fa-chevron-circle-right"></span></a>
                    </div>
                </div>

            </div>

        </div>
    </div>


    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script type="text/javascript" src="js/owl.carousel.js"></script><!-- Owl Carousel Plugin -->
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script><!-- LightBox Nivo -->

    <!-- Portfolio Filter -->
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/imagesloaded.js"></script>
    
    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>