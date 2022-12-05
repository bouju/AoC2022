<?php
$test = file_get_contents("input/jour3");
$lines = new LimitIterator(new ArrayIterator(explode(PHP_EOL, $test)),1);
$index = 0;
$nbOfTree = 0;
foreach ($lines as $line){

    $length = strlen($line);
    $index  = ($index + 3 ) % $length;

    $arrayOfLine = str_split($line);
    if($arrayOfLine[$index] === "#"){
        $nbOfTree +=1;
    }

}

echo $nbOfTree;
