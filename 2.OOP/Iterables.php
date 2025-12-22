<?php
function PrintIterable(iterable $iterable) {
    foreach ($iterable as $value) {
        echo $value.PHP_EOL;
    }
}
$arr = array(1, 2, 3, 4);
PrintIterable($arr);