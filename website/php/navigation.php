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
            <a class="navbar-brand" href="http://localhost:8009/index.php"><img src="/img/logo.png" style="height:32px" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/shop1.php">Blue Bags</a></li>
                        <li><a href="/shop2.php">Red Bags</a></li>
                        <li><a href="/shop3.php">Complete Set</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">More Options</li>
                        <li><a href="#">Shop by category</a></li>
                        <li><a href="#">Shop by type</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/shop1.php">Shop</a></li>
                <li ><a href="./">Sign-Up <span class="sr-only">(current)</span></a></li>
<!--                <li><a href="../navbar-fixed-top/">Fixed top</a></li>-->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>