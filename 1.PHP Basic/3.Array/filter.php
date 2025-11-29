<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];


$oddNumbers = [];
$evenNumbers = [];

foreach ($numbers as $number) {
    if ($number % 2 !== 0) {
        $oddNumbers[] = $number;
    }
    else{
        $evenNumbers[] = $number;
    }
}
print_r($oddNumbers);
print_r($evenNumbers);  


# Using array_filter function
$oddNumbersFilter = array_filter($numbers, function($number){
    return $number %2=== 0;
});

# Using array_filter function

$evenNumbersFilter = array_filter($number,function($number){
    return $number %2!= 0;
});
print_r($oddNumbersFilter);
print_r($evenNumbersFilter);