<?php //session_start();?>
<?php //include('./../lib/twitter/twconfig.php');?>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
<!--            <a class="navbar-brand" href="http://localhost:8009/index.php"><img src="/img/logo.png" style="height:32px" />CornholeAce</a>-->
            <a class="navbar-brand" href="/index.php" style="font-family:Vipnagorgialla, Helvetica">CORNHOLE<strong>ACE</strong></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/shop3.php">Red Bags</a></li>
                        <li><a href="/bluebags.php">Blue Bags</a></li>
                        <li><a href="/professionalset.php">Complete Set - All</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">More Options</li>
                        <li><a href="#">Shop by category</a></li>
                        <li><a href="#">Shop by type</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/shop2.php">Shop</a></li>
            <?php if ($_SESSION['TID'] || $_SESSION['FBID']): ?>
            <?php else: ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Sign-Up</b> <span class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    Login via
                                    <div class="social-buttons">
                                        <!--                                        <a href="http://new.cornholeace.com/" onclick="FB.login();" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>-->
<<<<<<< HEAD
                                        <a href="/php/fbconfig.php" class="btn btn-fb"><i class="fa fa-facebook"></i>
=======
                                        <a href="./php/fbconfig.php" class="btn btn-fb"><i class="fa fa-facebook"></i>
>>>>>>> ac1108f992595882f82378fa3c52da27b633f34c
                                            Facebook</a>
                                        <a href="./../lib/twitter/twconfig.php" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            <?php endif ?>
<!--                <li><p class="navbar-text">Already have an account?</p></li>-->
            <?php if ($_SESSION['TID'] || $_SESSION['FBID']): ?>
            <?php else: ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    Login via
                                    <div class="social-buttons">
<!--                                        <a href="http://new.cornholeace.com/" onclick="FB.login();" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>-->
<<<<<<< HEAD
                                        <a href="/php/fbconfig.php" class="btn btn-fb"><i class="fa
                                        fa-facebook"></i>
=======
                                        <a href="./php/fbconfig.php" class="btn btn-fb"><i class="fa fa-facebook"></i>
>>>>>>> ac1108f992595882f82378fa3c52da27b633f34c
                                            Facebook</a>
                                        <a href="./../lib/twitter/twconfig.php" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
<!--                                        <a href="--><?php //echo $_SESSION['LOGINURL'];?><!--" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>-->
                                    </div>
                                    or
<<<<<<< HEAD
                                    <form class="form" href="#" action="/dbconfig.php" method="post" role="form" accept-charset="UTF-8" id="login-nav"> <!--action="login"-->
=======
                                    <form class="form" href="#" action="./../dbconfig.php" method="post" role="form" accept-charset="UTF-8" id="login-nav"> <!--action="login"-->
>>>>>>> ac1108f992595882f82378fa3c52da27b633f34c
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                            <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> keep me logged-in
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="bottom text-center">
                                    New here ? <a href="#"><b>Join Us</b></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            <?php endif ?>
            <?php if ($_SESSION['TID'] || $_SESSION['FBID']):  ?>
                <li class="dropdown">
                    <?php if ($_SESSION['FBID']): ?>
                    <a href="#" style="padding-top:0.5em;padding-bottom:0.5em;" class="dropdown-toggle" data-toggle="dropdown"><img style="width:36px; height:36px;" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"><span class="caret"></span></a>
                    <?php else: ?>
                        <a href="#" style="padding-top:0.5em;padding-bottom:0.5em;" class="dropdown-toggle" data-toggle="dropdown"><img style="width:36px; height:36px;" src="<?php echo $_SESSION['PROFILEIMAGE']; ?>"><span class="caret"></span></a>
                    <?php endif ?>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="social-buttons">
                                        <a href="./../logout.php" class="btn btn-default">Logout</a>
                                        <a href="./../profile.php" class="btn btn-primary">Profile</a>
<!--                                        <a href="?logout=true" class="btn btn-default">LogoutTwitter</a>-->
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
<!--                <li style="padding-top:0.5em; padding-bottom:0.5em;" ><img style="width:30px; height:30px;" src="https://graph.facebook.com/--><?php //echo $_SESSION['FBID']; ?><!--/picture"></li>-->
            <?php else: ?>
<!--                <li><a href="./../fbconfig.php">Login</a></li>-->
            <?php endif ?>
<!--                <li style="padding-top:1em; padding-bottom:1em" class="fb-login-button" data-default-audience="friends" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="true"></li>-->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>