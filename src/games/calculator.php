<?php

namespace BrainGames\games\Calculator;

use function BrainGames\Cli\run;

const DESCRIPTION = 'What is the result of the expression?';

const OPERATORS = ['+', '-', '*'];

function calc()
{
        return run(
            DESCRIPTION,
            function () {
                $firstQuestionForGame = rand(1, 99);
                $secondQuestionForGame = rand(1, 99);
                $maxIndexOfOperatorsArray = 2;
                $operator = rand(0, $maxIndexOfOperatorsArray);
                $operation = OPERATORS[$operator];
                switch ($operation) {
                    case '+':
                        $answer = $firstQuestionForGame + $secondQuestionForGame;
                        break;
                    case '-':
                        $answer = $firstQuestionForGame - $secondQuestionForGame;
                        break;
                    case '*':
                        $answer = $firstQuestionForGame * $secondQuestionForGame;
                        break;
                }
                $question = "$firstQuestionForGame $operation $secondQuestionForGame";
                return [$question, (string) $answer];
            }
        );
}
