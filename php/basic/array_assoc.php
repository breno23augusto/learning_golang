<?php

function main()
{
    $vertex = new StdClass();
    $vertex->lat = 40.68433;
    $vertex->long = -74.39967;
    
    $a = ['Bell Labs' => $vertex];
    print_r($a['Bell Labs']);
}

main();
