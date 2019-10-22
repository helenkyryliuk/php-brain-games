<?php

  namespace BrainGames\Even;
  
  $description = 'Answer "yes" if the number is even, otherwise answer "no".';

function even()
{
    $result = [];
    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber = rand(1, 99);
        $correctAnswer = $randomNumber % 2 === 0 ? 'yes' : 'no';
        $item = [$randomNumber, $correctAnswer];
        $result[] = $item;
    }
    return [$description, $result];
}
