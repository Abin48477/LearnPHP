<?php
// Get data from AJAX request
$name = isset($_GET['name']) ? $_GET['name'] : 'Unknown';
$age = isset($_GET['age']) ? $_GET['age'] : 'Unknown';

// Respond back to AJAX
echo "Hello, $name! You are $age years old.";
?>
