<?php include('dbconfig.php');?>
<?php include('php/head.php')?>
<?php include('php/navigation.php')?>

<?php
//
//$db_handle = pg_connect("dbname=cornhole");
//
//$query = "SELECT * FROM item";
//
//$result = pg_exec($db_handle, $query);
//
//echo "Number of rows: " . pg_numrows($result);
//
//pg_freeresult($result);
//
//pg_close($db_handle);
//
//?>
<!---->
<?php
//
//
//$host = "cornholedb.c6sgbeek7pg2.us-east-1.rds.amazonaws.com";
//$user = "cornhole";
//$pass = "playthrowtoss";
//$port = "5432";
//$dbname = "postgres";
//
//$con = pg_connect("host=$host dbname=$dbname user=$user password=$pass port=$port")
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
//?>
<!---->
<?php
//
//phpinfo();
//
//?>

    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>A Warm Welcome to CornholeAce!</h1>
            <p>CornholeAce is a high-quality tailgating sports vendor...sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <p><a class="btn btn-primary btn-large">Call to action!</a>
            </p>
        </header>

        <hr>

        <form class="form-horizontal" action="dbconfig.php"  method="post">
            <fieldset>

                <!-- Form Name -->
                <legend>Form Name</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="firstname">First name</label>
                    <div class="col-md-6">
                        <input id="firstname" name="firstname" type="text" placeholder="first name..." class="form-control input-md">
                        <span class="help-block">Enter your first name</span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="lastname">Last name</label>
                    <div class="col-md-6">
                        <input id="lastname" name="lastname" type="text" placeholder="last name..." class="form-control input-md">
                        <span class="help-block">Enter your last name</span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Email</label>
                    <div class="col-md-6">
                        <input id="email" name="email" type="text" placeholder="email" class="form-control input-md">
                        <span class="help-block">Enter your email address</span>
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="password">Password</label>
                    <div class="col-md-6">
                        <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
                        <span class="help-block">Enter your password</span>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="comment">Comment</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="comment" name="comment">Enter comments here...</textarea>
                    </div>
                </div>

                <div class="row text-center">
                    <input class="btn btn-danger" type="submit"/><button type="submit" class="btn btn-primary ">Submit</button>
                </div>


            </fieldset>
        </form>



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