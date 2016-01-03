<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

    <!-- Header short -->
    <?php include('php/header_nav.php');?>
    
    <!-- Favicons   
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="fonts/icons/flaticon.css"> 

    <!-- Nivo Lightbox
    ================================================== -->
    <link rel="stylesheet" href="css/nivo-lightbox.css" >
    <link rel="stylesheet" href="css/nivo_lightbox_themes/default/default.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Google Font
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat+Subrayada:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  
    
  </head> 
  <body>

	<?php include('php/header_main_nav.php');?>

    <!-- Main Navigation
    ========================-->
    <div id="header-slider" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active"> <!-- Slider Item #1 -->
                <img src="img/slider/02.jpg" alt="...">
                <div class="carousel-caption">
                    <h1>Welcome to <br>Highground </h1>
                    <p class="lead">Highground Services is a top-notch Engineering and Construction Company that serves all industrial, commercial, and municipal industries.</p>
                    <a class="btn btn-default en-btn" href="about.php" role="button">Learn More</a>
                </div>
            </div>
            <div class="item"> <!-- Slider Item #2 -->
                <img src="img/slider/03.jpg" alt="...">
                <div class="carousel-caption">
                    <h1>Leading in Enginering <br>and Construction</h1>
                    <p class="lead">Trusted by Hundreds of Companies for Engineering and Construction across the nation.</p>
                    <a class="btn btn-default en-btn" href="services.php" role="button">Our Services</a>
                </div>
            </div>
            <div class="item"> <!-- Slider Item #3 -->
                <img src="img/slider/01.jpg" alt="...">
                <div class="carousel-caption">
                    <h1>Your One-Stop <br>Services Company</h1>
                    <p class="lead">We offer you all Engineering, Construction, and Industrial Services at the highest quality we could offer.</p>
                    <a class="btn btn-default en-btn" href="about.php" role="button">Get Started Now</a>
                </div>
            </div>
        </div>

         
        <a class="left carousel-control" href="#header-slider" role="button" data-slide="prev">
            <span class="fa fa-long-arrow-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#header-slider" role="button" data-slide="next">
            <span class="fa fa-long-arrow-right" aria-hidden="true"></span>
        </a>
    </div>

    <!-- Intro 
    ========================--> 
    <div id="en-intro">
        <div class="container">
            <div class="row">

                <!-- Left Content 4 Cols -->
                <div class="col-sm-4 col-md-4">
                    <div class="section-title text-left"> <!-- Left Section Title -->
                        <h2>About <br>Highground</h2>
                        <hr>
                        <small>We are a small business, women-owned SWAM certified business with a big punch.  We serve our customers well with our wide range of services across all industries.</small>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <?php 
                      $david = "I Love David Jenkins";
                      echo $david;
                      ?>
                    <p>Highground Services is a multi-discipline engineering services firm providing a broad base of needs to our commercial and industrial customers.  We excel in Mechanical, Electrical, Controls, and Fire Protection engineering projects in the industrial, commercial, and municipal markets.  Our practical knowledge of engineering systems and applications comes from years of hands-on experience involving projects of all sizes.  We ensure the highest quality for every engineering project while providing turn-key design services and solutions to all our customers.  We are professionally licensed in Virginia, Maryland, North Carolina, and Indiana.</p>

                    <a class="read-more" href="about.php">Read More <span class="fa fa-chevron-circle-right"></span></a>
                </div>

            </div>
        </div>
    </div>

    <!-- Service
    ========================-->
    <div id="en-services">
        <div class="container">

            <div class="section-title text-center"><!-- Centered Section Title -->
                <h2>Our Services</h2>
                <hr>
                <p>We provide the best Engineering, Construction, Industrial Services to our customers. We stand behind our work and continue to grow in this fast paced industry.  We're leaders in the community who propel organizations to be successful.</p> 
                <a class="read-more" href="services.php">View All Services <span class="fa fa-chevron-circle-right"></span></a>
            </div>

            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="service"> <!-- Service #1 -->
                        <a href="service/civil-architecture.php">
                            <img src="http://placehold.it/800x500" alt="" class="img-responsive">
                        </a>
                        <a href="service/civil-architecture.php"><h4>Engineering</h4></a>
                        <p>Highground Services is a multi-discipline engineering services firm providing a broad range of services to our commercial and industrial customers. We excel in Mechanical, Electrical, and Controls engineering projects in the industrial, commercial, and municipal markets.</p>
                        <a class="read-more" href="service/civil-architecture.php">Read More <span class="fa fa-chevron-circle-right"></span></a>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="service"> <!-- Service #2 -->
                        <a href="service/mechanical.php">
                            <img src="http://placehold.it/800x500" alt="" class="img-responsive">
                        </a>
                        <a href="service/mechanical.php"><h4>Construction</h4></a>
                        <p>Our construction services are broad as we cover the spectrum of electrical, civil, controls, and mechanical trades. We have a strongest background in electrical and custom control intregration systems. From conceptual engineering and construction to startup, we’re prepared to implement our construction services for any phase of your project.</p>
                        <a class="read-more" href="service/mechanical.php">Read More <span class="fa fa-chevron-circle-right"></span></a>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="service"> <!-- Service #3 -->
                        <a href="service/electrical.php">
                            <img src="http://placehold.it/800x500" alt="" class="img-responsive">
                        </a>
                        <a href="service/electrical.php"><h4>Industrial Services</h4></a>
                        <p>We provide design, implementation, continuous improvement, and sustainability support for existing and new Process Control Systems implementing both Distributed Control Systems (DCS) and Programmable Logic Control Systems (PLC) for our customers.  </p>
                        <a class="read-more" href="service/electrical.php">Read More <span class="fa fa-chevron-circle-right"></span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- CTA
    ========================-->
    <div class="en-cta">
        <div class="overlay color">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Looking for the Best Engineering Solution for your Project?</h2>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-default en-btn light" href="contact.php" role="button">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects
    ========================-->
    <div id="en-portfolio">
        <div class="container">

            <div class="section-title text-center"><!-- Centered Section Title -->
                <h2>Latest Works</h2>
                <hr>
                <p>Check out our latest projects we've been working on.  We're excited to share all of the facinating industries we work in.  Click on some of our sample projects.</p>
                <a class="read-more" href="project-3col.php">View All Works <span class="fa fa-chevron-circle-right"></span></a>
            </div>

            <div id="portfolio-items" class="owl-carousel owl-theme">

                <div class="item"><!-- Portfolio Item #1 -->
                    <div class="hover-bg">
                        <div class="hover-text off">
                            <h4>Jordan Bridge</h4>
                            <br>
                            <p>The Jordan Bridge was one of the biggest projects Highground has completed. View the project for more details about our success.  </p>
                            <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                        </div>
                        <img src="http://placehold.it/750x1000" alt="..." class="img-responsive">
                    </div>
                </div>

                <div class="item"> <!-- Portfolio Item #2 -->
                    <div class="hover-bg">
                        <div class="hover-text off">
                            <h4>Engineering Studies</h4>
                            <br>
                            <p>Highground has an accomplished resume of engineering studies for a variety of clients.  Check out some of the project's we've completed. </p>
                            <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                        </div>
                        <img src="http://placehold.it/750x1000" alt="..." class="img-responsive">
                    </div>
                </div>

                <div class="item"> <!-- Portfolio Item #3 -->
                    <div class="hover-bg">
                        <div class="hover-text off">
                            <h4>Integrated Controls</h4>
                            <br>
                            <p>Integrated controls projects are one of our specialties. We've worked with industry leaders to provide the best systems possible.  </p>
                            <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                        </div>
                        <img src="http://placehold.it/750x1000" alt="..." class="img-responsive">
                    </div>
                </div>

                <div class="item"><!-- Portfolio Item #4 -->
                    <div class="hover-bg">
                        <div class="hover-text off">
                            <h4>Commercial Building</h4>
                            <br>
                            <p>We've been involved with countless commercial building projects both large and small. Check out our past history of completed projects. </p>
                            <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                        </div>
                        <img src="http://placehold.it/750x1000" alt="..." class="img-responsive">
                    </div>
                </div>

                <div class="item"><!-- Portfolio Item #5 -->
                    <div class="hover-bg">
                        <div class="hover-text off">
                            <h4>Industrial Services</h4>
                            <br>
                            <p>We provide a variety of industrial services for our clients. High quality performance is what we strive for in every project.  </p>
                            <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                        </div>
                        <img src="http://placehold.it/750x1000" alt="..." class="img-responsive">
                    </div>
                </div>

                <div class="item"><!-- Portfolio Item #6 -->
                    <div class="hover-bg">
                        <div class="hover-text off">
                            <h4>Technical Writing</h4>
                            <br>
                            <p>Technical writing is a skill that Highground has mastered.  Whether it's preventative maintenance plans, or technical documentation, we've handled it all.</p>
                            <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                        </div>
                        <img src="http://placehold.it/750x1000" alt="..." class="img-responsive">
                    </div>
                </div>

            </div>

        </div>
    </div>

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

    <!-- Our Partners
    ========================-->
    <div id="en-partners">
        <div class="container">
            <div class="row">

                <!-- Left Content 4 Cols -->
                <div class="col-md-4">
                    <div class="section-title text-left"> <!-- Left Section Title -->
                        <h2>Our Trusted<br>Partners</h2>
                        <hr>
                        <small>We've established trusted partners in our 10 years of service - ensuring quality relationships and partnerships with our clients. </small>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <img src="img/partners/01.png" class="img-responsive" alt="...">
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <img src="img/partners/02.png" class="img-responsive" alt="...">
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <img src="img/partners/03.png" class="img-responsive" alt="...">
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <img src="img/partners/04.png" class="img-responsive" alt="...">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Area -->

	<?php include('php/footer.php');?> 
    
    

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