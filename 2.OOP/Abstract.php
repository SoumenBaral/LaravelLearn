<?php
// Parent Class  
abstract class Car {
    public $name; 
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro();
}
//Child Classes

class Audi extends Car {
    public function intro(){
        return "Choose German Quality ! I'm an $this->name";
    }
}
class volvo extends Car
{
    public function intro(){
        return "French Extravagance ! I'm an $this->name";
    }
}
$audi = new Audi("Audi");
echo $audi->intro();
echo PHP_EOL;
$volvo = new volvo("Volvo");
echo $volvo->intro();
