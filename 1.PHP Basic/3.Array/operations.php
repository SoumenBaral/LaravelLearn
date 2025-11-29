<?php

$students = ["shuvo" => "CSE"
    , "shakib" => "BBA"
    , "sumon" => "ENG"

];
# this is associative array
print_r($students);
$students["rakib"] = "LAW";
print_r($students);
$students["shakib"] = "poralakha bad";
print_r($students);

array_push($students,"PHYSICS");
print_r($students);