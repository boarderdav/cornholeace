<?php
session_start();

require 'dbconfig.php';

// TWITTER SQL DATABASE CONNECTION
mysqli_select_db($conn, $dbname) or die ("could not open database connection");
//$tid = $_SESSION['TID'];
//$name = $_SESSION['NAME'];
//$femail = $_SESSION['EMAIL'];
//$fbgender = $_SESSION['GENDER'];
//$fbage = $_SESSION['AGE'];
//$fbdevices = $_SESSION['DEVICES'];
//$fbfname = $_SESSION['FNAME'];
//$fblname = $_SESSION['LNAME'];
//$fbcover = 'https://graph.facebook.com/' . $_SESSION['FBID'] . '?fields=cover';
//$fbpicture = 'https://graph.facebook.com/' . $_SESSION['FBID'] . '/picture';
//$bio = GetSQLValueString($user_profile['bio'], "text");
$query = "SELECT * FROM usersTwitter WHERE user_id = '{$_SESSION['TID']}'";  //just changed to only $femail instead of dgjenkin@vt.edu
//echo $_SESSION['TID'];
//echo $tid;
$res = mysqli_query($conn, $query) or die('Query failing at $res: ' . mysqli_error($conn) . "<br>\n$sql");
//echo "Show nubmer of rows returned " . mysqli_num_rows($res) . " !!!";
if(mysqli_num_rows($res) == 0)
{
    $iquery = "INSERT INTO usersTwitter (user_id,name,screen_name,location,profile_image_url,description,geo,place,url,
followers_count)
					VALUES ('{$_SESSION['TID']}','{$_SESSION['NAME']}','{$_SESSION['SCREENNAME']}','{$_SESSION['location']}','{$_SESSION['PROFILEIMAGE']}','{$_SESSION['DESCRIPTION']}','{$_SESSION['GEO']}','{$_SESSION['PLACE']}','{$_SESSION['FOLLOWERSCOUNT']}','{$_SESSION['FRIENDCOUNT']}')";
    $ires = mysqli_query($conn, $iquery) or die('Query failed: at $ires ' . mysqli_error($conn) . "<br>\n$sql");
    //      $_SESSION['EMAIL'] = $user_profile['email'];
}
else
{
    $row = mysqli_fetch_array($res);
//       $_SESSION['EMAIL'] = $row['email'];
}

$conn->close();