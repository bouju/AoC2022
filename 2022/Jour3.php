<?php
$test = file_get_contents("input/jour3");
$rucksacks = explode(PHP_EOL, $test);
$sum = 0;

foreach ($rucksacks as $listOfSupplies){
    $compartments = str_split($listOfSupplies, strlen($listOfSupplies) /2);

    $items = array_unique(array_intersect(str_split($compartments[0]),str_split($compartments[1])));
    $items = reset($items);

    if( $items != null && ctype_upper($items)){
        $sum += (ord($items) -38);
    } elseif ($items != null) {
        $sum += (ord($items) -96);
    }
}

echo $sum . PHP_EOL;
