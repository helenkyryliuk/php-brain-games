<?php

namespace BrainGames\Calculator;

use function BrainGames\Random\getRandomNumber;

function calc()
{
    $description = 'What is the result of the expression?';
    $result = [];
    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber1 = getRandomNumber();
        $randomNumber2 = getRandomNumber();
        $firstQuestionToString = "$randomNumber1 + $randomNumber2";
        $correctAnswer = $randomNumber1 + $randomNumber2;
        $item = [$firstQuestionToString, (string) $correctAnswer];
        $result[] = $item;
    }
    return [$description, $result];
}
