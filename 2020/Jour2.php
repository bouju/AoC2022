<?php
$test = file_get_contents("input/jour2");
$lines = explode(PHP_EOL, $test);
$count = 0;
foreach ($lines as $line){
    $expression = explode(" ",$line);
    $number = explode("-",$expression[0]);
    $letter = substr($expression[1],0,1);
    $mdp = $expression[2];
    $nbOfChar = count_chars($mdp,1);
    $nbOfTest = $nbOfChar[ord($letter)];
    if($nbOfTest >= $number[0] && $nbOfTest <= $number[1]){
        $count +=1;
    }

}

echo $count;
