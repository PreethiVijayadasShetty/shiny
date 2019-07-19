<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipes";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email =  $_POST["email"]; 
$Fname= $_POST["firstname"];
$Lname= $_POST["lastname"];
$pass = $_POST["psw"]; 
$date = date("Y/m/d");

$sql = "INSERT INTO login (FirstName, LastName, EmailId, password)
VALUES ($Fname,$Lname,$email,$pass)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>