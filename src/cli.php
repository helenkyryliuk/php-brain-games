<?php

  namespace BrainGames\Cli;

  use function cli\line;
  use function cli\prompt;

function run(string $description, callable $fn)
{
    line('Welcome to the Brain Game!');
    line($description);
    line("\n");
    $name = prompt('May I have your name? Type here');
    line("Hello, %s!", $name);
    line("\n");
    $numberOfTrials = 3;
    for ($i = 0; $i < $numberOfTrials; $i += 1) {
        $questionAndAnswer = $fn();
        $question = $questionAndAnswer[0];
        $correctAnswer = $questionAndAnswer[1];
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
            return;
        }
    }
    line("\nCongratulations, $name!");
}
