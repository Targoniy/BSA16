<?php

namespace App\Lib\Binary\Academy\Smartphone;

class Display {

    protected $resolution;
    
        public function __construct(string $resolution)
    {
        $this->resolution = $resolution;
    }

    public function getInfo()
    {
        return $this->resolution;
    }
}