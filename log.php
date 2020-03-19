<?php
$servername = "localhost";
$username = "username";
$password = "password";

echo "helloef";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];
$fname = $_POST["fname"];

echo $fname;

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
//if (!$conn) {
 //   die("Connection failed: " . mysqli_connect_error());
//}
echo "Connected successfully";
?>