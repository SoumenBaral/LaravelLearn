<?php
class Car{
    public $color;
    private $model;
    public $year;
    public function __construct($color, $model, $year){
        $this->color = $color;
        $this->model = $model;
        $this->year = $year;
    }
    function mailage(){
        echo "Millage of the {$this->model} is 100CC";
    }
    function __destruct(){
        echo "End the Game";
    }
}

$volvo = new Car("Blue", "Volvo", 2000);
echo $volvo->color;
echo PHP_EOL;
echo $volvo->year;
echo PHP_EOL;
echo $volvo->model;
echo PHP_EOL;
$Toyota = new Car("Red", "Toyota", 2000);
echo $Toyota->color;
echo PHP_EOL;
echo $Toyota->year;
echo PHP_EOL;
echo $Toyota->model;
$Toyota->mailage();
echo PHP_EOL;
$volvo->mailage();
echo PHP_EOL;