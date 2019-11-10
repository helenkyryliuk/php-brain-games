<?php

namespace BrainGames\games\Progression;

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
            $maxIndexOfProgressionArray = 9;
            $generatedQuestion = rand(1, $maxIndexOfProgressionArray);
            $maxIntervalForProgression = 10;
            $randomInterval = rand(1, $maxIntervalForProgression);
            $randomIndex = rand(1, $maxIndexOfProgressionArray);
            $progression = generateProgression($generatedQuestion, $randomInterval);
            $questionToString = generateProgressionString($randomIndex, $progression);
            $correctAnswer = $progression[$randomIndex];
            return [$questionToString, (string) $correctAnswer];
        }
    );
}
