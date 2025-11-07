<?php
/*
//Types of Arrays in PHP
1.Indexed Array(numbers as keys)

$friends= ["Krishna","Balaram","arjun"];
foreach ($friends as $f)
{
    echo $f ."<br>";
}

2.Associative Ararys(words as keys)

*/
$marks =[
    "Math" => 95,
    "Science" => 88,
    "English" =>90
];
// echo $marks["Math"];//95

// 
foreach($marks as $subject=>$m){
    echo "$subject". ":".$m ."<br>";

}
?>