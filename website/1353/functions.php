<?php
session_start();

require './../dbconfig.php';

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


$sql = "INSERT INTO Users(Fuid,Ffname,Femail,Fnamef,Fnamel,Fcover,Fpicture)
VALUES ('$fbid','$fbfullname','$femail','$fbfname','$fblname','$fbcover','$fbpicture')";

//$sql = "INSERT INTO Users(Fuid,Ffname,Femail,Fgender,Fage,Fdevices,Fnamef,Fnamel,Fcover,Fpicture)
//VALUES ('$fbid','$fbfullname','$femail','$fbgender','$fbage','$fbdevices','$fbfname','$fblname','$fbcover','$fbpicture')";



//function checkuser($fbid,$fbfullname,$femail){
//	$check = mysqli_query("select * from Users where Fuid='$fbid'");
//	$check = mysql_num_rows($check);
//	if (empty($check)) { // if new user . Insert a new record
//		$query = "INSERT INTO Users (Fuid,Ffname,Femail) VALUES ('$fbid','$fbfullname','$femail')";
//		mysqli_query($query);
//	} else {   // If Returned user . update the user record
//		$query = "UPDATE Users SET Ffname='$fbfullname', Femail='$femail' where Fuid='$fbid'";
//		mysqli_query($query);
//	}
//}





//function checkuser($fbid,$fbfullname,$femail){
//	$check = mysqli_query("select * from Users where Fuid='$fbid'");
//	$check = mysql_num_rows($check);
//	if (empty($check)) { // if new user . Insert a new record
//	$query = "INSERT INTO Users (Fuid,Ffname,Femail) VALUES ('$fbid','$fbfullname','$femail')";
//	mysqli_query($query);
//	} else {   // If Returned user . update the user record
//	$query = "UPDATE Users SET Ffname='$fbfullname', Femail='$femail' where Fuid='$fbid'";
//	mysqli_query($query);
//	}
//}



if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}



//$conn->close();
?>

<!--function checkuser($fuid,$ffname,$femail){-->
<!--$fbid,$fbfullname,$femail-->

<html>
<head>
	<title>Functions.php</title>
</head>
<body>
	<h1> function.php testing </h1>
	<h1><?php echo $fbfullname ?></h1>
	<h1><?php echo $_SESSION['FBID']; ?></h1>

	<?php $david = $_SESSION['EMAIL'];
		echo $david; ?>

</body>
</html>
