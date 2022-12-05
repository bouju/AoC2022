<?php
$test = file_get_contents("input/jour2");
$lines = explode(PHP_EOL, $test);
$count = 0;
foreach ($lines as $line){
    $expression = explode(" ",$line);
    $number = explode("-",$expression[0]);
    $letter = substr($expression[1],0,1);
    $ArrayMdp = str_split($expression[2]);
    if( (isset($ArrayMdp[$number[0]-1]) && $ArrayMdp[$number[0]-1] == $letter) xor (isset($ArrayMdp[$number[1]-1]) && $ArrayMdp[$number[1]-1] == $letter)){
        $count +=1;
    }


}

echo $count;
