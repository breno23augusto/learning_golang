<?php

function main()
{
    $numbers = [1, 2, 3];
    foreach ($numbers as $index => $number) {
        echo $index . ' ' . $number . PHP_EOL;
    }

    echo PHP_EOL;

    $numbers = ['primeiro' => 1, 'segundo' => 2];
    foreach ($numbers as $index => $number) {
        echo $index . ' ' . $number . PHP_EOL;
    }
}

main();
