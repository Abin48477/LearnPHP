<?php
// Database connection script
$servername = "localhost"; 
$username = "root";
$password = "";
$database = "mydb"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>