<?php

class Application
{
    public function menu()
    {
        echo "----------------------------------------------------------------" . 
        PHP_EOL . "Elevator buttons options:" . PHP_EOL . PHP_EOL
            . "\t\t" . "Push \"1\" --> Current state." . PHP_EOL
            . "\t\t" . "Push \"2\" --> Add people in elevator." . PHP_EOL
            . "\t\t" . "Push \"3\" --> Remove people from elevator." . PHP_EOL
            . "\t\t" . "Push \"4\" --> Send elevator to chosen floor." . PHP_EOL
            . "\t\t" . "Push \"5\" --> Exit program." . PHP_EOL . PHP_EOL;
    }
    public function start()
    {
        $elevator = new Elevator();
        while (true) {
            $this->menu();
            $choice = trim(fgets(STDIN));
            switch ($choice) {
                case 1:
                    $elevator->menu();
                    break;
                case 2:
                    $elevator->addPeople();
                    break;
                case 3:
                    $elevator->removePeople();
                    break;
                case 4:
                    $elevator->sendToFloor();
                    break;
                case 5:
                    break 2;
                default:
                    echo PHP_EOL . "You pushed \"{$choice}\". I don't understand this command. Try again." . PHP_EOL;
            }
        }
        echo PHP_EOL . "Have a nice day!" . PHP_EOL. PHP_EOL;
    }
}
