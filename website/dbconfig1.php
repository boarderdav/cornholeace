<?php
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


echo "DBCONFIG MySQL cornhole Database $servername Connected successfully";


mysql_select_db("cornholeAWStest", $conn);

$sql="INSERT INTO userTable (firstname, lastname, email, password)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]')";



if ($conn->query($sql) === TRUE) {
    echo "Table userTable created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>
