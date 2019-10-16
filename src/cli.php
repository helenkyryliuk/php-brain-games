<?php

  namespace BrainGames\Cli;

  use function cli\line;
  use function cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    line("\n");
    $name = prompt('May I have your name? Type here');
    line("Hello, %s!", $name);
    line("\n");
}
