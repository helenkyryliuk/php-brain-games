<?php

  namespace BrainGames\Even;
  
  use function BrainGames\Random\getRandomNumber;

function even()
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';
    $result = [];
    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber = getRandomNumber();
        $correctAnswer = $randomNumber % 2 === 0 ? 'yes' : 'no';
        $item = [$randomNumber, $correctAnswer];
        $result[] = $item;
    }
    var_dump($result);
    return [$description, $result];
}
