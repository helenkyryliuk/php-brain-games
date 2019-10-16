<?php

  namespace BrainGames\Even;

  use function cli\line;
  use function cli\prompt;

function getRandomNumber()
{
    $randomNumber = rand(1, 999);
    return $randomNumber;
}

function even()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    line("\n");
    $name = prompt('May I have your name? Type here');
    line("Hello, %s!", $name);
    line("\n");
    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber = getRandomNumber();
        line('Question: ' . $randomNumber);
        $correctAnswer = $randomNumber % 2 === 0 ? 'yes' : 'no';
        $answer = prompt('Your answer');
        if ($answer === $correctAnswer) {
            line('Correct!');
            line($i === 2 ? "\nCongratulations, $name!" : '');
        }
        if ($answer !== $correctAnswer) {
            return line(
                "$answer is wrong answer ;(. Correct answer was 'no'.\n
  Let's try again, $name!"
            );
        }
    }
}
