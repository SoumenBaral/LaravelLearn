<?php
//class StaticClass
//{
//    public static function StaticMethod(){
//        echo "OOP is Fun!";
//    }
//}
//StaticClass::StaticMethod();

// Approach 2
//class greeting{
//    public static function Welcome(){
//        echo "Welcome to Greeting!";
//    }
//    public function __construct(){
//        self::Welcome();
//    }
//}
//new greeting();

class domain{
    protected static function getWebsite()
    {
        return "Google.com";
    }
}
class domain2 extends domain
{
    public $websiteName;
    public function __construct(){
        $this->websiteName = parent::getWebsite();
    }
}
$domain3 = new domain2();
echo $domain3->websiteName;