<?php
//$servername = "cornholeaws-test.c6sgbeek7pg2.us-east-1.rds.amazonaws.com";
//$username = "cornhole";
//$password = "playthrowtoss";
//$dbname = "cornholeAWStest";

  define('db_user','cornhole');
  define('db_password','playthrowtoss');
  define('db_host','cornholeaws-test.c6sgbeek7pg2.us-east-1.rds.amazonaws.com');
  define('db_name','cornholeAWStest');

  // Connect to MySQL
  $dbc = @mysql_connect (db_host, db_user, db_password) OR die ('Could not connect to  MySQL: ' . mysql_error() );
    // Select the correct database
   mysql_select_db (db_name) OR die ('Could not select the database: ' . mysql_error() );

    require './src/Facebook/facebook.php';

  // Create our Application instance (replace this with your appId and secret).
  $facebook = new Facebook(array(
      'appId'  => '686534241383052',
      'secret' => '49f3d3991c74d0e1101321c7d069a683',
      'cookie' => true));


    // Get User ID
     $user = $facebook->getUser();

    // We may or may not have this data based on whether the user is logged in.
   //
  // If we have a $user id here, it means we know the user is logged into
 // Facebook, but we don't know if the access token is valid. An access
 // token is invalid if the user logged out of Facebook.

   if ($user) {
       try {
           // Proceed knowing you have a logged in user who's authenticated.
           $fbuid = $facebook->getUser();
           $user_profile = $facebook->api('/me');



       } catch (FacebookApiException $e) {
           error_log($e);
           $user = null;
       }
   }else{
       header('Location: indexjs.php');

   }
          $query = mysqli_query("SELECT * FROM fbConnect WHERE oauth_provider = 'facebook' AND     oauth_uid = ". $user_profile['id']);
          $result = mysqli_fetch_array($query);

        if(empty($result)){
            $query = mysqli_query("INSERT INTO fbConnect (oauth_provider, oauth_uid, username)         VALUES ('facebook', {$user_profile['id']}, '{$user_profile['name']}')");
            $query = msyqli_query("SELECT * FROM fbConnect WHERE id = " . mysql_insert_id());
            $result = mysql_fetch_array($query);
        }



       // Login or logout url will be needed depending on current user state.
        if ($user) {
            $paramsout = array('next'=>'http://www.mywebsite.com/test/logout.php');
            $logoutUrl = $facebook->getLogoutUrl($paramsout);
        }


         ?>