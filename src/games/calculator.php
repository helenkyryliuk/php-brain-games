<?php

namespace BrainGames\Calculator;

const DESCRIPTION = 'What is the result of the expression?';

const OPERATORS = ['+', '-', '*'];

function calc()
{
    $parametersForCalcGame = [];
    $numberOfTrials = 3;
    for ($i = 0; $i < $numberOfTrials; $i += 1) {
        $numForPlayer1 = rand(1, 99);
        $numForPlayer2 = rand(1, 99);
        $operator = rand(0, 2);
        $operation = OPERATORS[$operator];
        switch ($operation) {
            case '+':
                $answer = $numForPlayer1 + $numForPlayer2;
                break;
            case '-':
                $answer = $numForPlayer1 - $numForPlayer2;
                break;
            case '*':
                $answer = $numForPlayer1 * $numForPlayer2;
                break;
        }
        $question = "$numForPlayer1 $operation $numForPlayer2";
        $questionAndAnswer = [$question, (string) $answer];
        $parametersForCalcGame[] = $questionAndAnswer;
    }
    return [DESCRIPTION, $parametersForCalcGame];
}
