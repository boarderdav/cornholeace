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
<!--    <link href="../css/bootstrap.min.css" rel="stylesheet">-->
    <link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> <!--added bootstrap secondary css.  might remove later-->
    <link href="../css/cornholeace.css" rel="stylesheet">
    <link href="../css/site.css" rel="stylesheet">


    <!--FontAwesome CSS link    -->
    <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--<!--[if lt IE 9]><script src="../../vendor/twitter/bootstrap/docs/assets/js/ie8-responsive-file-warning.js"></script>[endif]-->
    <!--<script src="../../vendor/twitter/bootstrap/docs/assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->

    <!-- Custom styles for this template -->


</head>

<body>
<?php include('php/navigation.php');?>
<?php
session_start();
?>
<?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
    <?php include_once('functions.php'); ?>
    <div class="container">
        <div class="hero-unit">
            <h1>Hello <?php echo $_SESSION['FNAME']; ?></h1>
            <p>Welcome to CornholeAce site using facebook login</p>
        </div>
        <div class="span4">
            <ul class="nav nav-list">
                <li class="nav-header">Image</li>
                <li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
                <li class="nav-header">Facebook ID</li>
                <li><?php echo $_SESSION['FBID']; ?></li>
                <li class="nav-header">Facebook fullname</li>
                <li><?php echo $_SESSION['FULLNAME']; ?></li>
                <li class="nav-header">Facebook Email</li>
                <li><?php echo $_SESSION['EMAIL']; ?></li>
                <li class="nav-header">Facebook Gender</li>
                <li><?php echo $_SESSION['GENDER']; ?></li>
                <li class="nav-header">Facebook First Name</li>
                <li><?php echo $_SESSION['FNAME']; ?></li>
                <li class="nav-header">Facebook Last Name</li>
                <li><?php echo $_SESSION['LNAME']; ?></li>
                <div><br>
                    <a href="logout.php"><button class="btn btn-info">Logout</button></a>
                    <a href="index.php"><button class="btn btn-primary">Home Page</button></a>
                </div>
            </ul>
        </div>
    </div>

<?php else: ?>     <!-- Before login -->

    <div class="container">
        <h1>Login with Facebook</h1>
        <div><a href="fbconfig.php"><button class="btn btn-success">Login with Facebook</button></a></div>
    </div>

<?php endif ?>