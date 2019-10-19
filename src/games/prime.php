<?php

namespace BrainGames\Prime;

use function BrainGames\Random\getRandomNumber;

function isPrime($num)
{
    if ($num === 0 || $num === 1) {
        return false;
    }
        $temp = $num - 1;
    for ($i = $temp; $i > 1; $i -= 1) {
        if ($num % $i === 0) {
                return false;
        }
    }
    return true;
}

function prime()
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $result = [];
    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber = getRandomNumber();
        $correctAnswer = isPrime($randomNumber) ? 'yes' : 'no';
        $item = [$randomNumber, $correctAnswer];
        $result[] = $item;
    }
    return [$description, $result];
}
