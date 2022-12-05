<?php
$test = file_get_contents("input/jour4");
$elfs = explode(PHP_EOL, $test);

$overLap = 0;

foreach ($elfs as $elfPair){
    $elfPair = array_map( function ($input){
        return explode("-",$input);
    }, explode(",",$elfPair));



    if($elfPair[0][1] >= $elfPair[1][0] && $elfPair[0][0] <= $elfPair[1][1]){
        $overLap +=1;
        echo json_encode($elfPair) . PHP_EOL;
    }
}

echo $overLap . PHP_EOL;