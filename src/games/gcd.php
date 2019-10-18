<?php

namespace BrainGames\Gcd;

use function BrainGames\Random\getRandomNumber;

function getGcd($num1, $num2)
{
    if ($num1 === 0 && $num2 === 0) {
        return 0;
    }
    if ($num1 === $num2) {
        return $num1;
    }
    if ($num1 > $num2) {
        $temp = $num2;
    }
    if ($num2 > $num1) {
        $temp = $num1;
    }
    $result = 0;
    for ($i = $temp; $i >= 1; $i -= 1) {
        if (($num1 % $i === 0) && ($num2 % $i === 0)) {
                return $i;
        }
    }
}

function gcd()
{
    $description = 'Find the greatest common divisor of given numbers.';
    $result = [];
    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber1 = getRandomNumber();
        $randomNumber2 = getRandomNumber();
        $randomNum = rand(0, 3);
        $questionToString = "$randomNumber1 $randomNumber2";
        $correctAnswer = getGcd($randomNumber1, $randomNumber2);
        $item = [$questionToString, (string) $correctAnswer];
        $result[] = $item;
    }
    return [$description, $result];
}
