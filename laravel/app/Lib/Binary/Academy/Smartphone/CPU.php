<?php

namespace App\Lib\Binary\Academy\Smartphone;

class CPU {

    protected $CPU;
    
    public function __construct(string $CPU)
    {
        $this->CPU = $CPU;
    }

    public function getInfo()
    {
        return $this->CPU;
    }
}