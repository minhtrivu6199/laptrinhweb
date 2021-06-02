<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="mydb";

// Create connection
$conn =  mysqli_connect($servername,$username,$password, $dbname);

// check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
