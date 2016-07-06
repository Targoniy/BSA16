<?php

namespace App\Lib\Binary\Academy\Smartphone;

class Name {

    protected $name;
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getInfo()
    {
        return $this->name;
    }
}