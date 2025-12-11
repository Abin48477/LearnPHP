<?php
// Database connection script
$servername = "localhost"; 
$username = "root";
$password = "";
$database = "crud_operation"; // Replace with your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connected successfully";
}
?>