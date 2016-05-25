<?php
namespace Greeting;

class Greeting
{
    use RandomQuote;

    public static function say($name)
    {
        echo sprintf("Hi, %s! There is a new quote for you:<br><br> \"%s. <br>", $name,
            self::$quotes[mt_rand(0,5)]);
    }
}
