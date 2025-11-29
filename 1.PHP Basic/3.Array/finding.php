<?php
$numbers = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$founds = array_search(50, $numbers);

if($founds){
    echo "Found at index: ".$founds;
    echo " and value is ".$numbers[$founds];
}
else{
    echo "Not Found";
}

$get = in_array(500, $numbers);

if($get){
    echo "Value found";
}
else{
    echo "Value not found";
}


