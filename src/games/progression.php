<?php

namespace BrainGames\Progression;

use function BrainGames\Random\getRandomNumber;

function generateProgression($randomNumber) 
{
    $result = [];
    $randomInterval = rand(1, 10);
    $value = $randomNumber;
    for ($i = 0; $i < 10; $i +=1) {
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

function progress()
{
    $description = 'What number is missing in the progression?';
    $result = [];
    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber = getRandomNumber();
        $randomIndex = rand(0, 10);
        $array = generateProgression($randomNumber);
        $questionToString = generateProgressionString($randomIndex, $array);
        $correctAnswer = $array[$randomIndex];
        var_dump($correctAnswer);
        $item = [$questionToString, (string) $correctAnswer];
        $result[] = $item;
    }
    return [$description, $result];
}