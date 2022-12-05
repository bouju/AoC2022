<?php
$test = file_get_contents("input/jour3");
$rucksacks = explode(PHP_EOL, $test);
$sum = 0;

for ($i=0; $i< count($rucksacks); $i+=3){
    $items = array_unique(array_intersect(str_split($rucksacks[$i]),str_split($rucksacks[$i+1]),str_split($rucksacks[$i+2])));
    $items = reset($items);

    if( $items != null && ctype_upper($items)){
        $sum += (ord($items) -38);
    } elseif ($items != null) {
        $sum += (ord($items) -96);
    }
}

echo $sum . PHP_EOL;
