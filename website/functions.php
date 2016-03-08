<?php
session_start();

require 'dbconfig.php';

//$servername = "cornholeaws-test.c6sgbeek7pg2.us-east-1.rds.amazonaws.com";
//$username = "cornhole";
//$password = "playthrowtoss";
//$dbname = "cornholeAWStest";
//$port = "3306";

//Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
//if ($conn->connect_error) {
//	die("Connection failed: " . $conn->connect_error);
//}
//echo "DBCONFIG MySQL cornhole Database $servername Connected successfully";

/* ---- Session Variables -----*/
//$fbid = $_SESSION['FBID'];
//$fbfullname = $_SESSION['FULLNAME'];
//$femail = $_SESSION['EMAIL'];
//$fbgender = $_SESSION['GENDER'];
//$fbage = $_SESSION['AGE'];
//$fbdevices = $_SESSION['DEVICES'];
//$fbfname = $_SESSION['FNAME'];
//$fblname = $_SESSION['LNAME'];
//$fbcover = 'https://graph.facebook.com/' . $_SESSION['FBID'] . '?fields=cover';
//$fbpicture = 'https://graph.facebook.com/' . $_SESSION['FBID'] . '/picture';

// working sql function creates new record every time page loads.
//$sql = "INSERT INTO Users(Fuid,Ffname,Femail,Fnamef,Fnamel,Fcover,Fpicture)
//VALUES ('$fbid','$fbfullname','$femail','$fbfname','$fblname','$fbcover','$fbpicture')";

//Connect to Facebook User Table
//mysqli_select_db("cornholeAWStest", $conn) or die ("could not open database");
mysqli_select_db($conn, $dbname) or die ("could not open database connection");
$fbid = $_SESSION['FBID'];
$fbfullname = $_SESSION['FULLNAME'];
$femail = $_SESSION['EMAIL'];
$fbgender = $_SESSION['GENDER'];
$fbage = $_SESSION['AGE'];
$fbdevices = $_SESSION['DEVICES'];
$fbfname = $_SESSION['FNAME'];
$fblname = $_SESSION['LNAME'];
$fbcover = 'https://graph.facebook.com/' . $_SESSION['FBID'] . '?fields=cover';
$fbpicture = 'https://graph.facebook.com/' . $_SESSION['FBID'] . '/picture';
//$bio = GetSQLValueString($user_profile['bio'], "text");
$query = "SELECT * FROM Users WHERE Fuid = '{$fbid}'";  //just changed to only $femail instead of dgjenkin@vt.edu
//echo $_SESSION['EMAIL'];
//echo $femail;
$res = mysqli_query($conn, $query) or die('Query failing at $res: ' . mysqli_error($conn) . "<br>\n$sql");
//echo "Show nubmer of rows returned " . mysqli_num_rows($res) . " !!!";
if(mysqli_num_rows($res) == 0)
{
       $iquery = "INSERT INTO Users (Fuid,Ffname,Femail,Fgender,Fnamef,Fnamel,Fcover,Fpicture)
					VALUES ('$fbid','$fbfullname','$femail','$fbgender','$fbfname','$fblname','$fbcover','$fbpicture')";
       $ires = mysqli_query($conn, $iquery) or die('Query failed: at $ires ' . mysqli_error($conn) . "<br>\n$sql");
 //      $_SESSION['EMAIL'] = $user_profile['email'];
}
else
{
       $row = mysqli_fetch_array($res);
//       $_SESSION['EMAIL'] = $row['email'];
}

//if ($conn->query($iquery) == TRUE) {
//       echo "iquery Users table is working properly";
//} else {
//       echo "Error connecting to User table and not working" . $conn->error;
//}



//if ($conn->query($sql) === TRUE) {
//	echo "New record created successfully";
//} else {
//	echo "User " . $_SESSION['FULLNAME'] . " already exists in database " . $sql . "<br>"; // . $conn->error;
//}

$conn->close();

