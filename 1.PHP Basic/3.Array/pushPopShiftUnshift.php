<?php
$students = ["shuvo" => "CSE"
    , "shakib" => "BBA"
    , "sumon" => "ENG"

];

# this is associative array
print_r($students);
$students["rakib"] = "LAW"; # adding new key-value pair 
print_r($students);

# add in value using push
array_push($students,"PHYSICS");
print_r($students);
array_pop($students);
print_r($students);

# add in value using unshift .  It adds value at the beginning at the first index . 
array_unshift($students,"CHEMISTRY");
print_r($students);


# remove value using shift . It removes value from the beginning at the first index .
array_shift($students);
print_r($students);