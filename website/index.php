<?php

//$host = "cornholedb.c6sgbeek7pg2.us-east-1.rds.amazonaws.com";
//$user = "cornhole";
//$pass = "playthrowtoss";
//$db = "postgres";
//$port = "5432";
//
//$con = pg_connect("host=$host dbname=$db user=$user password=$pass port=$port")
//or die ("Could not connect to server\n");
//
//$query = "SELECT VERSION()";
//$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
//$row = pg_fetch_row($rs);
//
//echo $row[0] . "\n";
//
//pg_close($con);
//
//

   $host        = "host=cornholedb.c6sgbeek7pg2.us-east-1.rds.amazonaws.com";
   $port        = "port=5432";
   $dbname      = "dbname=postgres";
   $credentials = "user=cornhole password=playthrowtossing";

$dbs = ( "$host $port $dbname $credentials" );

try{
    $conn= new PDO($dbs);

    if($conn){
        echo "Connected to the <strong>$db</strong> database successfully! Connection worked correctly and David is awesome!!!";
    }
}catch (PDOException $e){
    echo $e->getMessage();
}
?>

<!--
//   $db = pg_connect( "$host $port $dbname $credentials"  );
//   if(!$db){
//       echo "Error : Unable to open database\n";
//   } else {
//       echo "Opened database successfully\n";
//   }



//require_once 'dbconfig.php';
//
//$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
//
//try{
//    // create a PostgreSQL database connection
//    $conn = new PDO($dsn);
//
//    // display a message if connected to the PostgreSQL successfully
//    if($conn){
//        echo "Connected to the <strong>$db</strong> database successfully!";
//    }
//}catch (PDOException $e) {
//    // report error message
//    echo $e->getMessage();
//}

//  include("../website/dbconfig.php");
//  $pg_connect = new pg_connect();
// -->




<!DOCTYPE html>
<html lang="en">
<head>

    <?php include('php/head.php');?>

</head>

<body>

<?php include('php/navigation.php');?>

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
