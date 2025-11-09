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
$fruits =["apple","banana","puppya","grapes"];
    echo "The List of Fruits are: "."<br>";
foreach($fruits as $fruit){
    echo $fruit."<br>";
}

$profile =[
"name"=>"Abin",
"age"=>21,
"hobby"=>"Programming",
"fav_god"=> "Krishna"];
foreach($profile as $p=>$details){
    echo $p.":".$details."<br>";
}
?>

