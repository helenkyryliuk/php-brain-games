<?php

  namespace BrainGames\Games\Even;

  use function BrainGames\Cli\run;
  
 const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($number)
{
    if (($number % 2) === 0) {
         return 'yes';
    }
     return 'no';
}

function even()
{
    return run(
        DESCRIPTION,
        function () {
            $generatedQuestionForGame = rand(1, 99);
            $correctAnswer = isEven($generatedQuestionForGame);
            return [$generatedQuestionForGame, $correctAnswer];
        }
    );
}
