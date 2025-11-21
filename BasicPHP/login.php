<?php
session_start();
$_SESSION["user"] = "Abin";
echo "You are logged in as ". $_SESSION["user"];

?>