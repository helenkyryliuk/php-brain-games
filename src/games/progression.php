<?php

namespace BrainGames\Progression;

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
    $parametersForProgressionGame = [];
    $numberOfTrials = 3;
    for ($i = 0; $i < $numberOfTrials; $i += 1) {
        $generatedChoice = rand(1, 9);
        $randomInterval = rand(1, 10);
        $randomIndex = rand(1, 9);
        $progression = generateProgression($generatedChoice, $randomInterval);
        $questionToString = generateProgressionString($randomIndex, $progression);
        $correctAnswer = $progression[$randomIndex];
        $questionAndAnswer = [$questionToString, (string) $correctAnswer];
        $parametersForProgressionGame[] = $questionAndAnswer;
    }
    return [DESCRIPTION, $parametersForProgressionGame];
}
