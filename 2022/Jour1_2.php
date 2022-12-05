<?php
 $test = file_get_contents("input/jour1");
 $arr = explode(PHP_EOL.PHP_EOL, $test);

$arrayOfSum = [];

 foreach ($arr as $values){
     $sum = 0;
     foreach (explode(PHP_EOL, $values) as $value){
         $sum += $value;
     }
    $arrayOfSum[] = $sum;
 }
rsort($arrayOfSum);
echo $arrayOfSum[0] + $arrayOfSum[1] + $arrayOfSum[2];