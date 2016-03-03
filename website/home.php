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

echo "MySQL cornhole Database $servername Connected successfully";

$firstname = mysqli_real_escape_string($conn, $_POST['response.name']);
$id = mysqli_real_escape_string($conn, $_POST['response.id']);
$password = mysqli_real_escape_string($conn, $_POST['response.name']);

$sql = "INSERT INTO userTable (firstname, id, password)
VALUES ('$firstname','$id', '$password')";

if (!mysqli_query($conn,$sql)) {
    die('Error: ' . mysqli_error($conn));
}

//echo $firstname;
//echo $id;
//echo $password;
//
//$fbname = $_POST['fbname'];
//$fbid = $_POST['fbid'];
//echo "Facebook name is " + .$fbname;
?>
