<?php

namespace BrainGames\Calculator;

const DESCRIPTION = 'What is the result of the expression?';

function calc()
{
    $parametersForCalcGame = [];
    $numberOfTrials = 3;
    for ($i = 0; $i < $numberOfTrials; $i += 1) {
        $firstNumberForPlayer = rand(1, 99);
        $secondNumberForPlayer = rand(1, 99);
        $numberToGenerateOperator = rand(0, 2);
        switch ($numberToGenerateOperator) {
            case 0:
                $questionToString = "$firstNumberForPlayer + $secondNumberForPlayer";
                $correctAnswer = $firstNumberForPlayer + $secondNumberForPlayer;
                break;
            case 1:
                $questionToString = "$firstNumberForPlayer - $secondNumberForPlayer";
                $correctAnswer = $firstNumberForPlayer - $secondNumberForPlayer;
                break;
            case 2:
                $questionToString = "$firstNumberForPlayer * $secondNumberForPlayer";
                $correctAnswer = $firstNumberForPlayer * $secondNumberForPlayer;
                break;
        }
        $questionAndAnswer = [$questionToString, (string) $correctAnswer];
        $parametersForCalcGame[] = $questionAndAnswer;
    }
    return [DESCRIPTION, $parametersForCalcGame];
}
