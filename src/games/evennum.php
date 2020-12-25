<?php

namespace TerminalGames\Games\EvenNum;

use function \TerminalGames\TerminalEngine\initialization;
 
const GAME_DESCRIPTION = "Answer 'yes' if number is even, else answer 'no'";

function evenNumGame()
{
    $game = function () {
        $num = mt_rand(1, 100);
        $task = "Is $num even? \n";
        $rightAnswer = isEven($num) ? 'yes' : 'no';
        return [$rightAnswer, $task];
    };
    initialization(GAME_DESCRIPTION, $game);
}

function isEven($num)
{
    return $num % 2 === 0;
}
