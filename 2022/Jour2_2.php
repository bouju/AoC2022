<?php
$test = file_get_contents("input/jour2");
$rounds = explode(PHP_EOL, $test);

$score = 0;

foreach ($rounds as $value){
    $play = explode(" ", $value);
    switch ($play[1]){
        case "X": // Loose
            $score +=0;
            switch ($play[0]){
                case "A": // Rock
                    $score +=3;
                    break;
                case "B": // Paper
                    $score +=1;
                    break;
                case "C": // Scissor
                    $score +=2;
                    break;
            }
            break;
        case "Y": // Draw
            $score +=3;
            switch ($play[0]){
                case "A": // Rock
                    $score +=1;
                    break;
                case "B": // Paper
                    $score +=2;
                    break;
                case "C": // Scissor
                    $score +=3;
                    break;
            }
            break;
        case "Z": // Win
            $score +=6;
            switch ($play[0]){
                case "A": // Rock
                    $score +=2;
                    break;
                case "B": // Paper
                    $score +=3;
                    break;
                case "C": // Scissor
                    $score +=1;
                    break;
            }
            break;
    }

}

echo $score;