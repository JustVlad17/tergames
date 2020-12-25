<?php

namespace TerminalGames\Games\PrimeNum;

use function \TerminalGames\TerminalEngine\initialization;

const GAME_DESCRIPTION = "Answer 'yes' if number is prime, else answer 'no'";

function primeNumGame()
{
    $game = function () {
        $num = mt_rand(1, 100);
        $rightAnswer = isPrime($num) ? 'yes' : 'no';
        $task = "Is $num prime? \n";
        return [$rightAnswer, $task];
    };
    initialization(GAME_DESCRIPTION, $game);
}

function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }
    $divisors = [];
    for ($i = 1; $i <= $num; ++$i) {
        if ($num % $i === 0) {
            $divisors[] = $i;
        }
    }
    if (count($divisors) == 2) {
        return true;
    } else {
        return false;
    }
}
