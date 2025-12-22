<?php
trait message1{
    public function msg1(){
        echo "OOP is Fun!";
    }
}
class Welcome
{
    use message1;
}
$welcome = new Welcome();
$welcome->msg1();