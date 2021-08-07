<?php

function main()
{
    $sum = 0;
    for ($i = 0; $i < 10; $i++) {
        $sum += $i;
    }

    echo $sum . PHP_EOL;

    $sum = 1;
    while ($sum < 1000) {
        $sum += $sum;
    }

    echo $sum;
}

main();
