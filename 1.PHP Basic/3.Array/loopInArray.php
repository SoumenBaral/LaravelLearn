<?php

$numbers = [10, 20, 30, 40, 50];

$totalNumber = count($numbers);
echo"Total Number is : ".$totalNumber;

for ($i = 0; $i<$totalNumber; $i++ ) {
    echo "\nNumber at index $i is : " . $numbers[$i];
    echo PHP_EOL;
}

foreach($numbers as $number){
    echo "Number is : ".$number;
    echo PHP_EOL;

}

# For Associative Array
$Capitals = [
    "USA" => "Washington D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Bangladesh"=> "Dhaka",
    "India"=> "New Delhi",
];

foreach($Capitals as $capitals){
    echo "Capital is : ".$capitals;
    echo PHP_EOL;
}

# For Associative Array with Key and Value 
foreach ($Capitals as $country => $capital) {
    echo "The capital of $country is $capital.";
    echo PHP_EOL;
}

foreach ($Capitals as $country => $capital) {
    echo "The capital of $country is $capital";
}