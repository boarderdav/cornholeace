<?php
session_start(); 
?>
<!doctype html>
<!--<html xmlns:fb="http://www.facebook.com/2008/fbml">-->
<html>
<head>
    <title>Login with Facebook TestingDave</title>
    <link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
</head>
<body>
    <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
    <?php include_once('./../1353/functions.php'); ?>
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
                <li><?php echo  $_SESSION['FBID']; ?></li>
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
                </div>
            </ul>
        </div>
    </div>

    <?php else: ?>     <!-- Before login -->

    <div class="container">
        <h1>Login with Facebook</h1>
               Not Connected
        <div><a href="http://new.cornholeace.com/1353/fbconfig.php"><button class="btn btn-success">Login with Facebook</button></a></div>
<!--        <div><a href="http://new.cornholeace.com/1353/fbconfig.php/"  title="Login with facebook">View Post</a></div>-->
    </div>

    <?php endif ?>

</body>
</html>