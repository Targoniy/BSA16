<?php

namespace App\Lib\Binary\Academy\Smartphone;

class Battery
{

    protected $capacity;

    public function __construct(int $capacity)
    {
        $this->capacity = $capacity;
    }

    public function getInfo()
    {
        return $this->capacity;
    }
}
