<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_POST=["name"];

function greetUser($n){
echo "Namaste! $n!";

}

if(empty ($name)){
    echo "Please Enter Your name";
}
else{
    greetUser($name);
}
 }
?>