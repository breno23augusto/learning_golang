<?php

function main()
{
    $sum = sum(1, 2);
    echo $sum;
}

function sum(int $a, int $b): int
{
    return $a + $b;
}

main();
