<?php include('php/head.php');?>
<?php include('php/navigation.php');?>
<?php include('api/getProduct1.php');?>
<!--<script>--><?php //include('api/getProduct1.js');?><!--</script>-->
<?php session_start();?>

<br><br>
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h1>A Warm Welcome to CornholeAce!</h1>
        <p>CornholeAce is a high-quality tailgating sports vendor. Check out our awesome products!</p>
        <p><a href="#" class="btn btn-primary btn-large">Call to action!</a>
        </p>
    </header>

    <hr>

    <div class="row text-center">
        <div class="col-xs-10 col-xs-offset-1">
            <div data-celery="56ce3a7be4ad561100af4c92" data-celery-type="embed" data-celery-version="v2">Checkout</div>
            <script async type="text/javascript" src="https://www.trycelery.com/js/celery.js"></script>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1">
            <div data-celery="56ce0181a5060a11002be466" data-celery-type="embed" data-celery-version="v2">Checkout</div>

        </div>
        <div class="col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1">
            <div data-celery="56ce078782f6fa110024d26e" data-celery-type="embed" data-celery-version="v2">Checkout</div>

        </div>
    </div>

    <div class="row text-center">
        <div class="col-xs-10-offset-1">
            <button class="btn btn-success" data-celery="56ce07ebe4ad561100af4ae8">
                Buy
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div id="#getProductJS"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 text-center">Testing Postman Script Product #1

            <h5 class="text-center"><?php echo $GLOBALS['description'];?>description1</h5>
            <h5 class="text-center"><?php echo $GLOBALS['name'];?>name</h5>
            <h5 class="text-center">user_id: <?php echo $GLOBALS['user_id'];?></h5>
            <img src="<?php echo $GLOBALS['productPicture'];?>"/>
            <a href="<?php echo $GLOBALS['productPicture'];?>">Product Picture Link</a>

        </div>
    </div>

    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Latest Features</h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://placehold.it/800x500" alt="">
                <div class="caption">
                    <h3>Feature Label</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://placehold.it/800x500" alt="">
                <div class="caption">
                    <h3>Feature Label</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://placehold.it/800x500" alt="">
                <div class="caption">
                    <h3>Feature Label</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://placehold.it/800x500" alt="">
                <div class="caption">
                    <h3>Feature Label</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright © Tailgating Sports, LLC 2016</p>
            </div>
        </div>
    </footer>

</div>
<?php include('php/footernew.php');?>
