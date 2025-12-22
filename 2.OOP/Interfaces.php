<?php
interface Animal
{
    public function makeSound();
}
class Cat implements Animal{
    public function makeSound(){
        echo "Meow".PHP_EOL;
    }
}
class Dog implements Animal{
    public function makeSound(){
        echo "Bark".PHP_EOL;
    }
}

class Mouse implements Animal
{
    public function makeSound(){
        echo "Squeak";
    }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = [$cat, $dog, $mouse];

foreach($animals as $animal){
    echo $animal->makeSound();
}