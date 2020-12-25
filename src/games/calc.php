<?php

namespace TerminalGames\Games\Calc;

use function \TerminalGames\TerminalEngine\initialization;

const GAME_DESCRIPTION = "Find the meaning of the expression";
    
function calcGame()
{
    $game = function () {
        $firstNum = mt_rand(1, 10);
        $secondNum = mt_rand(1, 10);
        $operations = ['+','-','*','/'];
        $operation = $operations[mt_rand(0, count($operations) - 1)];
        $task = "$firstNum $operation $secondNum \n";
        $rightAnswer = calc($firstNum, $operation, $secondNum);
            
        return [$rightAnswer, $task];
    };
    initialization(GAME_DESCRIPTION, $game);
}
    
function calc($firstNum, $operation, $secondNum)
{
    switch ($operation) {
        case '+':
            $result = $firstNum + $secondNum;
            break;
        case '-':
            $result = $firstNum - $secondNum;
            break;
        case '*':
            $result = $firstNum * $secondNum;
            break;
        case '/':
            $result = round($firstNum / $secondNum, 2);
            break;
    }
    return $result;
}
