<?php
class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function intro (){
        echo "The fruit is {$this->name} and the color is {$this->color}".PHP_EOL;
    }
}
// Strawberry is Inherited From fruit

class Strawberry extends Fruit{
    public function message(){
        echo "Am I a fruit?".PHP_EOL;
    }
}

$Mango = new Fruit("Mango","Yellow");
echo $Mango->intro();

$strawberry = new Strawberry("Strawberry","pink");
echo $strawberry->message();
echo $strawberry->intro();