<?php
require __DIR__ . '/vendor/autoload.php';

use Greeting\Application;
$newQuotes = new Application;
$newQuotes->run();
