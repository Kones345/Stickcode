<?php
$servername = "localhost";
$username = "id637138_root";
$password = "53x-9Yn-c3s-e9z";
$dbname = "id637138_stickcode";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>