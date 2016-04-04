<?php
//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'root');    // DB username
//define('DB_PASSWORD', '');    // DB password
//define('DB_DATABASE', 'facebook');      // DB name
//$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
//$database = mysqli_select_db(DB_DATABASE) or die( "Unable to select database");

//remote RDS AWS database
$servername = "cornholeaws-test.c6sgbeek7pg2.us-east-1.rds.amazonaws.com";
$username = "cornhole";
$password = "playthrowtoss";
$dbname = "cornholeAWStest";

//local facebook database mysql
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "facebook";


//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->close();
?>