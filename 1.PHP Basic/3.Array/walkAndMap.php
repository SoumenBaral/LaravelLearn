<?php
$numbers = [100,3,6,7,32,64,62,54,66,22,54];
$squares = [];
array_walk($numbers,function($number){
    echo "Current item is : {$number}";
    echo PHP_EOL; 
});

# Array walk is the alternative of Foreach. 

// foreach($numbers as $number){
// array_push($squares, $number*$number);
// };
// print_r($squares);


// same thing using Array map 

$squares = array_map(function($number){
    return $number*$number;
},$numbers);
print_r($squares);