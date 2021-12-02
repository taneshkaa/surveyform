<?php

$db=mysqli_connect("localhost", "root", "", "streaming");
if($db=== false) {
	die("Connection Failed!" .mysqli_connect_error());
}

$name ="";
$age ="";
$preference ="";
$firstpreference ="";
$secondpreference ="";
if(isset($_POST['addsurvey'])){
// Storing form values into PHP variables
$name = $_POST['name']; // Since method=”post” in the form
$age = $_POST['age'];
$preference = $_POST['preference'];
$firstpreference = $_POST['firstpreference'];
$secondpreference = $_POST['secondpreference'];
}

$query = "INSERT INTO survey(name, age, preference, firstpreference, secondpreference) VALUES('$name', '$age', '$preference', '$firstpreference', '$secondpreference')";
if (mysqli_query($db, $query))  {
	echo "Survey Submitted Successfully!";
} 
echo "Survey Submitted Successfully!";
mysqli_close($db);


?> 
