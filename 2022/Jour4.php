<?php
$test = file_get_contents("input/jour4");
$elfs = explode(PHP_EOL, $test);

$fullOverLap = 0;

foreach ($elfs as $elfPair){
    $elfPair = array_map( function ($input){
        $answer = explode("-",$input);
        $answer[] = $answer[1] - $answer[0]; // range
        return $answer;
    }, explode(",",$elfPair));

    $maxElf= null;
    $minElf= null;
    if($elfPair[0][2] >= $elfPair[1][2]){
        $maxElf = 0;
        $minElf = 1;
    } else {
        $maxElf = 1;
        $minElf = 0;
    }

    if($elfPair[$maxElf][1] >= $elfPair[$minElf][1] && $elfPair[$maxElf][0] <= $elfPair[$minElf][0]){
        $fullOverLap +=1;
        echo json_encode($elfPair) . PHP_EOL;
    }
}

echo $fullOverLap . PHP_EOL;