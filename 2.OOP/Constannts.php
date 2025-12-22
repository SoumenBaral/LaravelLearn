<?php
class Goodbye{
   const LEAVING_MESSAGE = "IT'S hard to say goodbye!";
   public  function byebye(){
       echo self::LEAVING_MESSAGE.PHP_EOL;
   }
}
echo Goodbye::LEAVING_MESSAGE.PHP_EOL;
$goodbye = new Goodbye();
echo $goodbye->byebye();
