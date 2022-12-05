<?php
$test = file_get_contents("input/jour1");
$expense = explode(PHP_EOL,$test);

foreach ($expense as $value){
    foreach ($expense as $value2){
        if ($value + $value2== 2020){
            echo $value . PHP_EOL;
            echo $value2 . PHP_EOL;
            echo $value*$value2 .PHP_EOL;
        }
    }
}