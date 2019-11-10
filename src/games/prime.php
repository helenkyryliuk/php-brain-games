<?php

namespace BrainGames\games\Prime;

use function BrainGames\Cli\run;

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i += 1) {
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
            $generatedQuestionForGame = rand(1, 99);
            $correctAnswer = isPrime($generatedQuestionForGame) ? 'yes' : 'no';
            return [$generatedQuestionForGame, $correctAnswer];
        }
    );
}
