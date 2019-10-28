<?php

namespace BrainGames\Games\Calculator;

use function BrainGames\Cli\run;

const DESCRIPTION = 'What is the result of the expression?';

const OPERATORS = ['+', '-', '*'];

function calc()
{
        return run(
            DESCRIPTION,
            function () {
                $numberOfTrials = 3;
                $firstNumberForPlayer = rand(1, 99);
                $secondNumberForPlayer = rand(1, 99);
                $maxRandomValueToIdentifyOperator = 2;
                $operator = rand(0, $maxRandomValueToIdentifyOperator);
                $operation = OPERATORS[$operator];
                switch ($operation) {
                    case '+':
                        $answer = $firstNumberForPlayer + $secondNumberForPlayer;
                        break;
                    case '-':
                        $answer = $firstNumberForPlayer - $secondNumberForPlayer;
                        break;
                    case '*':
                        $answer = $firstNumberForPlayer * $secondNumberForPlayer;
                        break;
                }
                $question = "$firstNumberForPlayer $operation $secondNumberForPlayer";
                return [$question, (string) $answer];
            }
        );
}
