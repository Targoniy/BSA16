<?php

namespace App\Lib\Binary\Academy\Smartphone;

class Smartphone {

    protected $name;
    protected $cpu;
    protected $display;
    protected $camera;
    protected $battery;

    public function __construct(Name $name, CPU $cpu, Display $display, Camera $camera, Battery $battery, Cores $cores)
    {
        $this->name = $name;
        $this->cpu = $cpu;
        $this->display = $display;
        $this->camera = $camera;
        $this->battery = $battery;
        $this->cores = $cores;

    }

    // public function __toString()
    // {
    //     $format = "%s, %s %d cores, %s display, %d megapixels camera, battery capacity %d mAh";
    //     $info = sprintf(
    //                 $format,
    //                 $this->name,
    //                 $this->cpu->getVendor(), $this->cpu->getCores(),
    //                 $this->display->getResolution(),
    //                 $this->camera->getResolution(),
    //                 $this->battery->getCapacity()
    //     );
    //     return $info;
        //Apple iPhone, Qualcomm 5555 2 cores, 480x320 display, 8 megapixels camera, battery capacity 1234 mAh.
    // }
}