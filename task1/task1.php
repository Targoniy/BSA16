<?php 
require __DIR__ . '/vendor/autoload.php';

use Marvel\NewYork\HankPym;
use Marvel\Cresskill\Wasp;
use Marvel\Asgard\Thor;
use Marvel\NewYork\IronMan;
use Marvel\Paterson\WonderMan;
use Marvel\England\CaptainBritan;
use Marvel\Dundee\Beast;


echo HankPym::whoami() . '<br>';
echo Wasp::whoami() . '<br>';
echo Thor::whoami() . '<br>';
echo IronMan::whoami() . '<br>';
echo WonderMan::whoami() . '<br>';
echo CaptainBritan::whoami() . '<br>';
echo Beast::whoami() . '<br>';

