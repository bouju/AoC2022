<?php
$test = file_get_contents("input/jour5");
$input = explode(PHP_EOL.PHP_EOL, $test);

$stacks = [];

foreach (array_reverse(array_slice(explode(PHP_EOL,$input[0]),0,-1)) as $line){
    echo $line . PHP_EOL;
    $nbStack = intdiv(strlen($line)+1,4);
    foreach (range(0,$nbStack-1) as $i){
        $value = substr($line,$i*4+1,1);
        if($value != " "){$stacks[$i+1][] = $value;}
    }
}
ksort($stacks);
echo json_encode($stacks). PHP_EOL;

foreach (explode(PHP_EOL,$input[1]) as $command){
    $exCommand = explode(" ", $command);
    $nbMove = $exCommand[1];
    $from = $exCommand[3];
    $to = $exCommand[5];

    foreach (range(1,$nbMove) as $move){
        $stacks[$to][] = array_pop($stacks[$from]);
    }
}

echo json_encode($stacks). PHP_EOL;

foreach ($stacks as $stack){
    echo array_pop($stack);
}