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

//// CREATE TABLE userTable
//$sql = "CREATE TABLE userTable (
////id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
////lastname VARCHAR(30),
////email VARCHAR(50) NOT NULL,
////password VARCHAR(30) NOT NULL,
////reg_date TIMESTAMP
////)";


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




//mysql_select_db("cornholeAWStest", $conn) or die ("could not open database");
//$name = "'" . $user_profile['name'] . "'";
//$email = "'" . $user_profile['email'] . "'";
//$gender = "'" . $user_profile['gender'] . "'";
//$bio = GetSQLValueString($user_profile['bio'], "text");
//$query = sprintf("SELECT * FROM new WHERE email = %s",$email);
//$res = mysql_query($query) or die('Query failed: ' . mysql_error() . "<br>\n$sql");
//if(mysql_num_rows($res) == 0)
//{
//       $iquery = sprintf("INSERT INTO fbConnect values('',%s,%s,%s,%s,'yes')",$name,$email,$gender,$bio);
//       $ires = mysql_query($iquery) or die('Query failed: ' . mysql_error() . "<br>\n$sql");
//       $_SESSION['user'] = $user_profile['email'];
//}
//else
//{
//       $row = mysql_fetch_array($res);
//       $_SESSION['user'] = $row['email'];
//}
//
//if ($conn->query($iquery) == TRUE) {
//       echo "iquery fbConnect table is working properly";
//} else {
//       echo "Error connecting to fbConnect table and not working" . $conn->error;
//}

//$conn->close();


//$conn = new mysqli($servername, $username, $password, $dbname) or die ("db could not open database checking");
//
//
//if($user) {
//
//       try {
//              $user_profile = $facebook->api('/me');
//       }finally {
//
//
//              //$conn = new mysqli($servername, $username, $password, $dbname) or die ("db could not open database checking");
//              $name = "'" . $user_profile['name'] . "'";
//              $email = "'" . $user_profile['email'] . "'";
//              $gender = "'" . $user_profile['gender'] . "'";
//              $bio = GetSQLValueString($user_profile['bio'], "text");
//              $query = sprintf("SELECT * FROM new WHERE email =ANYs", $email);
//              $res = mysql_query($query) or die('Query failed: ' . mysql_error() . "<br>\n$sql");
//              if (mysql_num_rows($res) == 0) {
//                     $iquery = sprintf("INSERT INTO fbConnect VALUES('',ANYs, ANYs, ANYs, ANYs,'yes')", $name, $email, $gender, $bio);
//                     $ires = mysql_query($iquery) or die('Query failed: ' . mysql_error() . "<br>\n$sql");
//                     $_SESSION['user'] = $user_profile['email'];
//              } else {
//                     $row = mysql_fetch_array($res);
//                     $_SESSION['user'] = $row['email'];
//              }
//
//       }
//}


$conn->close();
?>
