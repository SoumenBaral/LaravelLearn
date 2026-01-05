<?php
$height = 71;

$restInch = $height%12;
$heightInFeet = ($height-$restInch )/ 12;
$heightInCm = $height * 2.54;
echo "Height in cm: {$heightInCm} and Inch {$restInch}\n";
echo "Height in feet: {$heightInFeet} and inch {$restInch}\n"; ;
  
 
//Fahenheit to Celsius
$fahenheit = 98.6;
$celsius = ($fahenheit - 32) * 5/9;
echo "Temperature in Celsius: {$celsius}\n";    

//Celsius to Fahenheit
$celsius = 37;
$fahenheit = ($celsius * 9/5) + 32;
echo "Temperature in Fahenheit: {$fahenheit}\n";
