<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

//$cars = array("Volvo", "BMW", "Toyota");
//var_dump($cars);

class Car {
	function Car() {
		$this->model = "VW";
		$this->color = "blue";
		$this->year = 1997;
	}
}

$david = new Car();
echo $david->model;
echo "<br>";
echo $david->year;
echo "<br>";
echo str_word_count("David Jenkins Glenn");
echo "<br>";
 
define("david", "He is as professional engineer!");
echo david;

function test() {
	$x = 5;
	$y = 6;
	echo ++$y;
	//var_dump($x < $y);
	
}
echo "<br>";
test();
echo "<br>";


$t = date("H");
if ($t < "20") {
	echo "Have a nice day!";
} else {
	echo "Have a great evening!";
}
echo "<br>";

$d = 2;
while($d <= 6) {
	echo "The number is: $d <br>";
	$d++;
}

echo "<br>";
for ($r=1; $r <=5; $r++) {
	echo "The number is: $r <br>";
}


echo "<br>";
$numbers = array(4,6, 9, 2, 1, 34);
sort($numbers);
$arrlength = count($numbers);
for($x=0; $x < $arrlength; $x++) {
	echo $numbers[$x];
	echo "<br>";
}

$highground_url = "https://highgroundengineering.com";
$GLOBALS[$highground_url];
echo $highground_url;
echo "<br>";

echo $_SERVER['SERVER_NAME'];


?>

<!--PHP $_REQUEST-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//collect value of input field
	$name = $_REQUEST['fname'];
	if (empty($name)) {
		echo "Name is empty";
	} else {
		echo $name;
	}
}
?>
<br>


Welcome <?php echo $_POST['username']; ?><br>
Your new email address is: <?php echo $_POST['email']; ?>

$sql = "SELECT * FROM `firstDB` LIMIT 0, 30 ";

<?php
$servername = "localhost";
$username = "cornhol2_david";
$password = "element1";

//create connection
$conn = new mysqli($servername, $username, $password);

//check connection
if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}
echo "Connected Successfully";
?>

</body>
</html>