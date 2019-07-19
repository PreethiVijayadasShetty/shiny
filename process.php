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
$pass = $_POST["psw"]; 

$sql = "SELECT * FROM login where EmailId ='$email' and password = '$pass'";

$results = mysqli_query($conn, $sql);

if (mysqli_num_rows($results)>0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($results)) {
        header("Location: index.html");
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
