<?php
include 'connect.inc.php';
$a=$_POST["username"];
$b=md5($_POST["password"]);
$c=$_POST["fname"];
$d=$_POST["lname"];
$e=$_POST["email"];
$f=$_POST["gender"];

$sql = "INSERT INTO MyGuests (username,password,firstname,lastname,email,gender) VALUES ('$a','$b','$c','$d','$e','$f')";
if(empty($a)||empty($b)||empty($c)||empty($d)||empty($e)||empty($f)){
	echo 'You can not leave a field empty';
	echo '<br><a href="register.php">Please try again</a>';
}
else if (mysqli_query($conn, $sql)) {
	$last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Your ID is: " . $last_id;
	echo '<a href="index.php"><font color="red">Log In</a>';
} else {
    echo "Error: " . mysqli_error($conn);
	echo '<br><a href="register.php">Please try again</a>';
}

mysqli_close($conn);
?>