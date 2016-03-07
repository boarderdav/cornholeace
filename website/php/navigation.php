<?php
session_start();
?>

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
                        <li><a href="/shop1.php">Blue Bags Shop1</a></li>
                        <li><a href="/shop2.php">Red Bags Shop2</a></li>
                        <li><a href="/shop3.php">Complete Set Shop3</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">More Options</li>
                        <li><a href="#">Shop by category</a></li>
                        <li><a href="#">Shop by type</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/shop2.php">Shop</a></li>
            <?php if ($_SESSION['FBID']): ?>
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
                                        <a href="./../fbconfig.php" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                        <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            <?php endif ?>
<!--                <li><p class="navbar-text">Already have an account?</p></li>-->
            <?php if ($_SESSION['FBID']): ?>
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
                                        <a href="./../fbconfig.php" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                        <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                    </div>
                                    or
                                    <form class="form" href="#" action="./../dbconfig.php" method="post" role="form" accept-charset="UTF-8" id="login-nav"> <!--action="login"-->
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
            <?php if ($_SESSION['FBID']): ?>
                <li class="dropdown">
                    <a href="./../fbconfig.php" style="padding-top:0.5em;padding-bottom:0.5em;" class="dropdown-toggle" data-toggle="dropdown"><img style="width:36px; height:36px;" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"><span class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="social-buttons">
                                        <a href="./../logout.php" class="btn btn-default">Logout</a>
                                        <a href="./../profile.php" class="btn btn-primary">Profile</a>
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

We market heavily on Facebook, Amazon, Twitter, Instagram, and Pinterest.  The majority of our marketing is spent on Facebook and Amazon.

For Facebook, we promote our product through both video and photo advertising campaigns.  Our marketing cost per acquisition ranges from $5-8.  Our marketing efforts have been specifically tailored to lower our  overall cost per acquisition using some of the following methods.
1) Customized geographic regions in the US that consistently offer cheaper shipping rates.
2) Targeting customers with high online spending habits, play similar outdoor games as BucketBall, have children between ages of 18-26, and women between ages 45-60.
3) show one other item...

For Amazon, we have two methods of fulfillment to our customers.  1.) Amazon purchases from us directly through purchase orders to their designated shipping centers.  Amazon pays a wholesale price of $22/unit, pays for all the shipping to their fulfillment centers, and is responsible for advertising, marketing, and selling the BucketBall product.  The product is listed as an Amazon Prime eligible and Amazon does all order fulfillment.  2) Tailgating Sports lists the product on Amazon and is responsible for order fulfillment.  In this case, we take care of advertising and marketing through both Facebook and Amazon to drive conversions to the Amazon store.  In this case, our margins are significantly higher because we sell at full retail cost ($39.99 + S&H) and pay only $7 to Amazon for listing the product.

We've seen a linear correlation in advertising dollars compared to sales through our Facebook campaign strategy.  We've also become more efficient with marketing dollars spent and are trending to spend less and less per acquisition.  Since we primarily focus on social media advertising, the availability to increase advertising cost to active campaigns is a simple.  If we were to increase advertising costs to $2,000/day, we'd see a linear correlation and have the ability to sell product significantly faster.  Our only hurdle is selling out quicker than we can receive new product form our overseas manufacturer.