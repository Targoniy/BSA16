<?php

class Elevator
{
    private $numOfPeople = 0;
    private $floorNumber = 1;

    public function addPeople()
    {
        echo PHP_EOL . "How many people to add?" . PHP_EOL;
        $add = intval(fgets(STDIN));

        if ($this->numOfPeople + $add <= 4) {
            $this->numOfPeople += $add;
            echo PHP_EOL . "Added {$add} people." . PHP_EOL;
        } else {
            $this->numOfPeople += $add;
            echo PHP_EOL . "The number of people in elevator shouldn't excced 4. Now in elevator {$this->numOfPeople} peoples. We can't move up or down." . PHP_EOL;
        }
    }

    public function removePeople()
    {
        echo PHP_EOL . "How many people remove?" . PHP_EOL;
        $remove = intval(fgets(STDIN));

        if ($this->numOfPeople - $remove >= 0 and $this->numOfPeople - $remove < 5) {
            $this->numOfPeople -= $remove;
            echo PHP_EOL . "Removed {$remove} people." . PHP_EOL;
        } else {
            echo PHP_EOL . "The number of people in elevator shouldn't be less than 0. Now in elevator {$this->numOfPeople} peoples. You want remove {$remove}." . PHP_EOL;}
    }

    public function sendToFloor()
    {
        if ($this->numOfPeople < 5) {
            echo PHP_EOL . "Select floor:" . PHP_EOL;
            $floor = intval(fgets(STDIN));

            if (0 < $floor && $floor < 10) {
                $this->floorNumber = $floor;
                echo PHP_EOL . "We going to {$floor} floor." . PHP_EOL;
            } else {
                echo PHP_EOL . "Floor number must be from 1 to 9." . PHP_EOL;
            }
        } else {
            $shoudRemove = $this->numOfPeople - 4;
            echo PHP_EOL . "Elevator overloaded. Now in elevator {$this->numOfPeople} peoples. Please, remove at least {$shoudRemove}." . PHP_EOL;
            return false;
        }
    }

    public function menu()
    {
        echo PHP_EOL . "Information: Floor: " . $this->floorNumber . " People: " . $this->numOfPeople . PHP_EOL;
    }
}
