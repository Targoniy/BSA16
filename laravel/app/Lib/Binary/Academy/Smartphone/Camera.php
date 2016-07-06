<?php

namespace App\Lib\Binary\Academy\Smartphone;

class Camera
{

    protected $resolution;
    
        public function __construct(int $resolution)
    {
        $this->resolution = $resolution;
    }

    public function getInfo()
    {
        return $this->resolution;
    }
}