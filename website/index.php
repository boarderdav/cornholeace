<?php include('php/head.php');?>
<?php include('php/navigation.php');?>
<?php
session_start(); 
?>
    <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
    <?php include_once('functions.php'); ?>

<!--    <div class="container">-->
<!--        <div class="hero-unit">-->
<!--            <h1>Hello --><?php //echo $_SESSION['FNAME']; ?><!--</h1>-->
<!--            <p>Welcome to CornholeAce site using facebook login</p>-->
<!--        </div>-->
<!--        <div class="span4">-->
<!--            <ul class="nav nav-list">-->
<!--                <li class="nav-header">Image</li>-->
<!--                <li><img src="https://graph.facebook.com/--><?php //echo $_SESSION['FBID']; ?><!--/picture"></li>-->
<!--                <li class="nav-header">Facebook ID</li>-->
<!--                <li>--><?php //echo $_SESSION['FBID']; ?><!--</li>-->
<!--                <li class="nav-header">Facebook fullname</li>-->
<!--                <li>--><?php //echo $_SESSION['FULLNAME']; ?><!--</li>-->
<!--                <li class="nav-header">Facebook Email</li>-->
<!--                <li>--><?php //echo $_SESSION['EMAIL']; ?><!--</li>-->
<!--                <li class="nav-header">Facebook Gender</li>-->
<!--                <li>--><?php //echo $_SESSION['GENDER']; ?><!--</li>-->
<!--                <li class="nav-header">Facebook First Name</li>-->
<!--                <li>--><?php //echo $_SESSION['FNAME']; ?><!--</li>-->
<!--                <li class="nav-header">Facebook Last Name</li>-->
<!--                <li>--><?php //echo $_SESSION['LNAME']; ?><!--</li>-->
<!--                <div><br>-->
<!--                    <a href="logout.php"><button class="btn btn-info">Logout</button></a>-->
<!--                </div>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->

    <?php else: ?>     <!-- Before login -->

<!--    <div class="container">-->
<!--        <h1>Login with Facebook</h1>-->
<!--        <div><a href="fbconfig.php"><button class="btn btn-success">Login with Facebook</button></a></div>-->
<!--    </div>-->

    <?php endif ?>

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
                        <h1>Welcome <?php echo $_SESSION['FNAME']; ?> to CornholeAce.com</h1>
                        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                        <p><a class="btn btn-lg btn-primary" href="profile.php" role="button">Hello <?php echo $_SESSION['FNAME']; ?></a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="img/cornhole2.png" width="100%" height="300px" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Dual-Sided Bags</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="shop2.php" role="button">Shop here <?php echo $_SESSION['LNAME']; ?></a></p>
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
                <h1 class="text-danger code">Cornhole Ace</h1>
                <p>CornholeAce provides the best quality cornhole bags and boards the industry has ever seen! </p>
                <p><a class="btn btn-danger" href="shop2.php" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-md-4 text-center">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h1 class="text-success code">Cornhole Bags</h1>
                <p>We provide a super high-quality dual-sided cornhole bags. Top quality fabric, with resin-filled weatherproof materials makes this the best cornhole bags on the market.  </p>
                <p><a class="btn btn-success" href="shop2.php" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-md-4 text-center">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h1 class="blueColor code">Cornhole Boards</h1>
                <p>We supply the highest quality cornhole boards the industry has ever seen. </p>
                <p><a class="btn btn-primary" href="shop2.php" role="button">View details &raquo;</a></p>
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
                <script type="text/javascript">
                    window.onload = function ()
                    {
                        document.getElementById('width1').style.width = document.getElementById('width2')style.width;
                    }
                </script>
                <a href="#" class="img-caption">
                    <figure>
                        <img id="width1" src="img/CornholeAce-Package-top.jpg"/>
                        <figcaption id="width2" class="moveUp">
                            <h3 class="noMargin">Cornhole Bags</h3>
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