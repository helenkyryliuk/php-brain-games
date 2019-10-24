<?php

  namespace BrainGames\Even;
  
 const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function even()
{
    $parametersForEvenGame = [];
    $numberOfTrials = 3;
    for ($i = 0; $i < $numberOfTrials; $i += 1) {
        $generatedNumberForPlayer = rand(1, 99);
        $correctAnswer = $generatedNumberForPlayer % 2 === 0 ? 'yes' : 'no';
        $questionAndAnswer = [$generatedNumberForPlayer, $correctAnswer];
        $parametersForEvenGame[] = $questionAndAnswer;
    }
    return [DESCRIPTION, $parametersForEvenGame];
}
