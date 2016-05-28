<?php

function generator($n = 15)
{
    for ($i = 0; $i < $n; $i++) {
        yield ($i * ($i + 1)) / 2;
    }
}
$num = 1;
foreach (generator() as $triangleNum) {
    echo $num . " triangular number - " .$triangleNum . "<br>";
    $num++;
}
