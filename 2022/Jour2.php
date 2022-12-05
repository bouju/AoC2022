<?php
$test = file_get_contents("input/jour2");
$rounds = explode(PHP_EOL, $test);

$score = 0;

foreach ($rounds as $value){
    $play = explode(" ", $value);
    switch ($play[1]){
        case "X": // Rock
            $score +=1;
            switch ($play[0]){
                case "A": // Rock
                    $score +=3;
                    break;
                case "B": // Paper
                    break;
                case "C": // Scissor
                    $score +=6;
                    break;
            }
            break;
        case "Y": // Paper
            $score +=2;
            switch ($play[0]){
                case "A": // Rock
                    $score +=6;
                    break;
                case "B": // Paper
                    $score +=3;
                    break;
                case "C": // Scissor
                    break;
            }
            break;
        case "Z": // Scissor
            $score +=3;
            switch ($play[0]){
                case "A": // Rock
                    break;
                case "B": // Paper
                    $score +=6;
                    break;
                case "C": // Scissor
                    $score +=3;
                    break;
            }
            break;
    }

}

echo $score;