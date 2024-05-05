<?php
$servername = "localhost";
$database = "13020210093";
$username = "Ama123";
$password ="123";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {

die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully";
mysqli_close($conn);
?>