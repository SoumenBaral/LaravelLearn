<?php
$numbers = array(12,34,56,98);
print_r($numbers);

$numbers =[
    12,
    34,
    56,
    98,
    100,
    200
];
print_r($numbers);


// Associative Array
$ages = array(
    "Peter" => 35,
    "shuvo"=> 20,
    "shakib"=> 40,
    "sumon"=> 50,
    "rakib"=> 60,
);
print_r($ages);


// Multidimensional Array
$students = array(
    array("shuvo", 20, "CSE"),
    array("shakib", 25, "BBA"),
    array("sumon", 30, "ENG"),
) + $ages;

$students['shuvo'] = array("age"=>200, "dept"=>"CSE");
$students['shakib'] = array("age"=>200, "dept"=>"BBA");
print_r($students);