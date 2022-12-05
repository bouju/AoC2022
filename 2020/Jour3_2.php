<?php
$test = file_get_contents("input/jour3");
$lines = new LimitIterator(new ArrayIterator(explode(PHP_EOL, $test)),1);

$index1 = 0;
$index2 = 0;
$index3 = 0;
$index4 = 0;
$index5 = 0;

$down5 = 1;

$right1 = 1;
$right2 = 3;
$right3 = 5;
$right4 = 7;
$right5 = 1;

$nbOfTree1 = 0;
$nbOfTree2 = 0;
$nbOfTree3 = 0;
$nbOfTree4 = 0;
$nbOfTree5 = 0;

foreach ($lines as $line){

    $length = strlen($line);
    $index1 = ($index1 + $right1 ) % $length;
    $index2 = ($index2 + $right2 ) % $length;
    $index3 = ($index3 + $right3 ) % $length;
    $index4 = ($index4 + $right4 ) % $length;


    $arrayOfLine = str_split($line);
    if($arrayOfLine[$index1] === "#"){
        $nbOfTree1 +=1;
    }
    if($arrayOfLine[$index2] === "#"){
        $nbOfTree2 +=1;
    }
    if($arrayOfLine[$index3] === "#"){
        $nbOfTree3 +=1;
    }
    if($arrayOfLine[$index4] === "#"){
        $nbOfTree4 +=1;
    }

    if($down5 == 2){
        $down5 = 1;
        $index5 = ($index5 + $right5 ) % $length;
        if($arrayOfLine[$index5] === "#"){
            $nbOfTree5 +=1;
        }
    } else {
        $down5 +=1;
    }




}

echo $nbOfTree1 .PHP_EOL;
echo $nbOfTree2 .PHP_EOL;
echo $nbOfTree3 .PHP_EOL;
echo $nbOfTree4 .PHP_EOL;
echo $nbOfTree5 .PHP_EOL;

echo $nbOfTree1*$nbOfTree2*$nbOfTree3*$nbOfTree4*$nbOfTree5 . PHP_EOL;
