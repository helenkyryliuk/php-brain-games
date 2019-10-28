<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Cli\run;

function generateProgression($randomNumber, $randomInterval)
{
    $result = [];
    $value = $randomNumber;
    $numbersOfChoices = 10;
    for ($i = 0; $i < $numbersOfChoices; $i += 1) {
        $value += $randomInterval;
        $result[] = $value;
    }
    return $result;
}

function generateProgressionString($randomIndex, $array)
{
    $array[$randomIndex] = '..';
    $result = implode(' ', $array);
    return $result;
}

const DESCRIPTION = 'What number is missing in the progression?';

function progress()
{
    return run(
        DESCRIPTION,
        function () {
            $generatedChoice = rand(1, 9);
            $randomInterval = rand(1, 10);
            $randomIndex = rand(1, 9);
            $progression = generateProgression($generatedChoice, $randomInterval);
            $questionToString = generateProgressionString($randomIndex, $progression);
            $correctAnswer = $progression[$randomIndex];
            return [$questionToString, (string) $correctAnswer];
        }
    );
}
