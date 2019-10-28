<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Cli\run;

function isPrime($num)
{
    if ($num < 2) {
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
const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function prime()
{
    return run(
        DESCRIPTION,
        function () {
            $generatedNumberForPlayer = rand(1, 99);
            $correctAnswer = isPrime($generatedNumberForPlayer) ? 'yes' : 'no';
            return [$generatedNumberForPlayer, $correctAnswer];
        }
    );
}
