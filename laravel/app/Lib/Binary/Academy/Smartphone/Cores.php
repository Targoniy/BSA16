<?php

namespace App\Lib\Binary\Academy\Smartphone;

class Cores {

    protected $cores;
    
    public function __construct(int $cores)
    {
        $this->cores = $cores;
    }

    public function getInfo()
    {
        return $this->cores;
    }
}