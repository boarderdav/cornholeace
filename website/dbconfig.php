<?php
$servername = "cornholeaws-test.c6sgbeek7pg2.us-east-1.rds.amazonaws.com";
$username = "cornhole";
$password = "playthrowtoss";
$dbname = "cornholeAWStest";
//$port = "3306";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//$database = mysqli_select_db() or die( "unable to select database");
//mysqli_select_db($conn, $dbname);

//Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//echo "From DBCONFIG MySQL cornhole Database $servername Connected successfully";


?>
