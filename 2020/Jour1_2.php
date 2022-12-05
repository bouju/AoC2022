<?php
$test = file_get_contents("input/jour1");
$expense = explode(PHP_EOL,$test);

foreach ($expense as $value){
    foreach ($expense as $value2){
        foreach ($expense as $value3)
        if ($value + $value2 + $value3== 2020){
            echo $value . PHP_EOL;
            echo $value2 . PHP_EOL;
            echo $value3 . PHP_EOL;
            echo $value*$value2*$value3 . PHP_EOL;
        }
    }
}