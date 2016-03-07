<?php include('php/head.php');?>
<?php include('php/navigation.php');?>
<?php
session_start();
?>
<?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
    <?php include_once('functions.php'); ?>
    <div class="container">
        <div class="jumbotron text-center">
            <h2>Hello <?php echo $_SESSION['FNAME']; ?></h2>
            <p>Welcome to CornholeAce site!</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                    <A href="profile.php" >Edit Profile</A>

                    <A href="logout.php" >Logout</A>
                    <br>
                    <p class=" text-info">March 05,2016,03:00 pm </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo $_SESSION['FULLNAME']; ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture" class="img-circle img-responsive"> </div>

                                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                                  <dl>
                                    <dt>DEPARTMENT:</dt>
                                    <dd>Administrator</dd>
                                    <dt>HIRE DATE</dt>
                                    <dd>11/12/2013</dd>
                                    <dt>DATE OF BIRTH</dt>
                                       <dd>11/12/2013</dd>
                                    <dt>GENDER</dt>
                                    <dd>Male</dd>
                                  </dl>
                                </div>-->
                                <div class=" col-md-9 col-lg-9 ">
                                    <table class="table table-user-information">
                                        <tbody>
                                        <tr>
                                            <td>First Name</td>
                                            <td><?php echo $_SESSION['FNAME']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td><?php echo $_SESSION['LNAME']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Facebook ID</td>
                                            <td><?php echo $_SESSION['FBID']; ?></td>
                                        </tr>

                                        <tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td><?php echo $_SESSION['GENDER']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Devices</td>
                                            <td>type of device.</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><a href="mailto:<?php echo $_SESSION['EMAIL']; ?>"><?php echo $_SESSION['EMAIL']; ?></a></td>
                                        </tr>
                                        <td>Phone Number</td>
                                        <td>757-536-5000(Landline)<br><br>757-4567-890(Mobile)
                                        </td>

                                        </tr>

                                        </tbody>
                                    </table>

                                    <a href="logout.php" class="btn btn-primary">Logout</a>
                                    <a href="index.php" class="btn btn-primary">Homepage</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a href="mailto:<?php echo $_SESSION['EMAIL']; ?>" data-original-title="Email/Share Message" data-toggle="tooltip" type="button" class="btn btn-lg btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit profile" data-toggle="tooltip" type="button" class="btn btn-lg btn-warning"><i class="glyphicon glyphicon-cloud"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-lg btn-danger"><i class="glyphicon glyphicon-star"></i></a>
                        </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text-muted code panel-title"><?php echo $_SESSION['FULLNAME']; ?></h3>
                    </div>
                    <div class="panel-body">
                        <h6><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></h6>
                    </div>
                    <div class="panel-heading">
                        <h4 class="text-muted code panel-title">Facebook ID</h4>
                    </div>
                    <div class="panel-body">
                        <h6><?php echo $_SESSION['FBID']; ?></h6>
                    </div>
                    <div class="panel-heading">
                        <h3 class="text-muted code panel-title">Facebook Fullname</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $_SESSION['FULLNAME']; ?>
                    </div>
                    <div class="panel-heading">
                        <h3 class="text-muted code panel-title">Facebook Email</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $_SESSION['EMAIL']; ?>
                    </div>
                    <div class="panel-heading">
                        <h3 class="text-muted code panel-title">Facebook Gender</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $_SESSION['GENDER']; ?>
                    </div>
                    <div class="panel-heading">
                        <h3 class="text-muted code panel-title">First Name</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $_SESSION['FNAME']; ?>
                    </div>
                    <div class="panel-heading">
                        <h3 class="text-muted code panel-title">Last Name</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $_SESSION['LNAME']; ?>
                    </div>
                        <div class="row text-center"><br>
                            <a href="logout.php"><button class="btn btn-info">Logout</button></a>
                            <a href="index.php"><button class="btn btn-primary">Home Page</button></a>
                            <br>
                        </div>
                </div>
            </div>
        </div>
    </div>



<?php else: ?>     <!-- Before login -->

    <div class="container">
        <h1>Login with Facebook</h1>
        <div><a href="fbconfig.php"><button class="btn btn-success">Login with Facebook</button></a></div>
    </div>

<?php endif ?>