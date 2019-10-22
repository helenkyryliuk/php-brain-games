<?php

namespace BrainGames\Gcd;

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

$description = 'Find the greatest common divisor of given numbers.';

function gcd()
{
    $result = [];
    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber1 = rand(1, 99);
        $randomNumber2 = rand(1, 99);
        $randomNum = rand(0, 3);
        $questionToString = "$randomNumber1 $randomNumber2";
        $correctAnswer = getGcd($randomNumber1, $randomNumber2);
        $item = [$questionToString, (string) $correctAnswer];
        $result[] = $item;
    }
    return [$description, $result];
}
