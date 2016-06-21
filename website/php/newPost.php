<?php
##### newPost.php used for login email and password at the moment #####
$servername = "cornholeaws-test.c6sgbeek7pg2.us-east-1.rds.amazonaws.com";
$username = "cornhole";
$password = "playthrowtoss";
$dbname = "cornholeAWStest";
//$port = "3306";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn, "cornholeAWStest");

$sql="INSERT INTO userTable (firstname, lastname, email, password)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]')";

$conn->close();
?>
