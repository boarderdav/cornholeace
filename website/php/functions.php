<?php
session_start();

require '../dbconfig.php';

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
$query = "SELECT * FROM fbUsers WHERE Fuid = '{$fbid}'";  //just changed to only $femail instead of dgjenkin@vt.edu
//echo $_SESSION['EMAIL'];
//echo $femail;
$res = mysqli_query($conn, $query) or die('Query failing at $res: ' . mysqli_error($conn) . "<br>\n$sql");
//echo "Show number of rows returned " . mysqli_num_rows($res) . " !!!";
if(mysqli_num_rows($res) == 0)
{
       $iquery = "INSERT INTO fbUsers (Fuid,Ffname,Femail,Fgender,Fnamef,Fnamel,Fcover,Fpicture)
					VALUES ('$fbid','$fbfullname','$femail','$fbgender','$fbfname','$fblname','$fbcover','$fbpicture')";
       $ires = mysqli_query($conn, $iquery) or die('Query failed: at $ires ' . mysqli_error($conn) . "<br>\n$sql");
 //      $_SESSION['EMAIL'] = $user_profile['email'];
}
else
{
       $row = mysqli_fetch_array($res);
//       $_SESSION['EMAIL'] = $row['email'];
}


$conn->close();

