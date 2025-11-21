<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['username'];
$god = $_POST['fevorite_god'];
echo "Hare Krishna, ".$name."!<br>";
echo "My fevorite God is :".$god;

}
?>
<form method ="post">
    <label>Name:</label>
    <input type="text" name="username" placeholder="Enter your name">
    <label>Favorite God</label>
    <input type ="text" name ="fevorite_god" placeholder ="Enter your fev.god">
    <button type="submit">Say Hi</button>
</form>
