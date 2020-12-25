<?php

namespace TerminalGames\Games\Lcm;

use function \TerminalGames\TerminalEngine\initialization;

const GAME_DESCRIPTION = "Find the smallest common multiple of given numbers";

function lcmGame()
{
    $game = function () {
        $firstNum = mt_rand(1, 100);
        $secondNum = mt_rand(1, 100);
        $task = "$firstNum and $secondNum ? \n";
        $rightAnswer = lcm($firstNum, $secondNum);
        return [$rightAnswer, $task];
    };
    initialization(GAME_DESCRIPTION, $game);
}

function lcm($firstNum, $secondNum)
{
     $divisorsOfFirstNum = divsOfNum($firstNum);
     $divisorsOfSecondNum = divsOfNum($secondNum);
     $commondivisors = array_intersect($divisorsOfFirstNum, $divisorsOfSecondNum);
     $diffdiv1 = array_diff($divisorsOfFirstNum, $divisorsOfSecondNum);
     $diffdiv2 = array_diff($divisorsOfSecondNum, $divisorsOfFirstNum);
     $lcm = array_product($commondivisors) * array_product($diffdiv1) * array_product($diffdiv2);
     return $lcm;
}
     
function divsOfNum($num)
{
    $div = 2;
    while ($num > 1) {
        if ($num % $div == 0) {
            $divsnum[] = $div;
            $num /= $div;
        } else {
            ++$div;
        }
    }
    return $divsnum;
}
