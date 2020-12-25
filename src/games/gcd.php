<?php

namespace TerminalGames\Games\Gcd;
 
use function \TerminalGames\TerminalEngine\initialization;
 
const GAME_DESCRIPTION = "Find the Greatest common divisor of given number's";
 
function gcdGame()
{
    $game = function () {
        $firstNum = mt_rand(1, 100);
        $secondNum = mt_rand(1, 100);
        $task = "$firstNum and $secondNum? \n";
        $rightAnswer = gcd($firstNum, $secondNum);
        return [$rightAnswer, $task];
    };
    initialization(GAME_DESCRIPTION, $game);
}
 
function gcd($firstNum, $secondNum)
{
    if ($secondNum == 0) {
        return $firstNum;
    }
        return gcd($secondNum, $firstNum % $secondNum);
}
