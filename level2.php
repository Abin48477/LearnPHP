<?php

//simple function
function sayHello(){
    echo "hello hare krishna!! <br>";

}

sayHello();
sayHello();
sayHello();

// function with input(parameter)

function greet($name) {
    echo "hare krishna ". $name."!<br>";
}
greet("Balaram");
greet("krishna");
greet("abin");


// function with return value
function add($a ,$b) {
    return $a + $b;

}
function helloFriends(){
    echo "jaya balaram!";

}
function square($n){
    echo " $n square is:".($n*$n) ."<br>";
}
square(4);

// echo add(13,5);
helloFriends();
?>