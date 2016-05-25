<?php 
namespace Greeting;

class Application
{
    use RandomQuote;

    public function run()
    {
        echo sprintf("<br>\"%s",self::$quotes[mt_rand(0,5)]);
    }
}
