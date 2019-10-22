<?php

  namespace BrainGames\Cli;

  use function cli\line;
  use function cli\prompt;

function run(array $questionsAndCorrectAnswers)
{
    line('Welcome to the Brain Game!');
    line($questionsAndCorrectAnswers[0]);
    line("\n");
    $name = prompt('May I have your name? Type here');
    line("Hello, %s!", $name);
    line("\n");
    foreach ($questionsAndCorrectAnswers[1] as [$question, $correctAnswer]) {
        line('Question: ' . $question);
        $answer = prompt('Your answer');
        if ($answer === $correctAnswer) {
            line('Correct!');
        }
        if ($answer !== $correctAnswer) {
            line(
                "$answer is wrong answer ;(. Correct answer was $correctAnswer.\n
Let's try again, $name!"
            );
        }
    }
    
    line("\nCongratulations, $name!");
}
