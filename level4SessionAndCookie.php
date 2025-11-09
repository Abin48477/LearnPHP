 <?php
session_start();
$SESSION["name"] = "Abin";
echo "hi ".$SESSION["name"];
?>
<?php
setcookie("city","Nepal",time() +3600);
echo "<br>";
echo $_COOKIE["city"];
?> 
