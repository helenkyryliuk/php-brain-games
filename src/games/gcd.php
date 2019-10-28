<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Cli\run;

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

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcd()
{
    return run(
        DESCRIPTION,
        function () {
            $firstNumberForPlayer = rand(1, 99);
            $secondNumberForPlayer = rand(1, 99);
            $questionToString = "$firstNumberForPlayer $secondNumberForPlayer";
            $correctAnswer = getGcd($firstNumberForPlayer, $secondNumberForPlayer);
            return [$questionToString, (string) $correctAnswer];
        }
    );
}
