#!/usr/bin/php
<?php
 echo "\n";
 echo 'Find the meaning of the expression'."\n";
 echo "\n";
 $name = readline('What is your name?: ');
 if (empty($name)) {
 	while (empty($name)) {
 		$name = readline('Please write your name to get started: ');
 	}
 }
 echo 'Hello, '.$name.'!'."\n";
 $howmanytasks = readline('How many tasks do you want to get?: ');
 if (empty($howmanytasks)) {
 	while (empty($howmanytasks)) {
 		$howmanytasks = readline ('Please enter the number of tasks: ');
 	}
 }
 $quantity = 0;
 for ($i = 1; $i <= $howmanytasks; ++$i) {
 	$num1 = mt_rand(1,100);
	$num2 = mt_rand(1,100);
	echo $num1.' and '.$num2."\n";
	$divsnum1 = [];
	$divsnum2 = [];
	for ($j = 1; $j <= $num1; ++$j) {
			if ($num1 % $j == 0) $divsnum1[] = $j;
	}
	for ($k = 1; $k <= $num2; ++$k) {
			if ($num2 % $k == 0) $divsnum2[] = $k;
	}
	$maxdiv = max(array_intersect($divsnum1,$divsnum2));
 	$answer = readline('');
	if ($maxdiv == $answer) echo 'You right!'."\n";
	else {
		echo 'You lose. Restart game if you want to play again'."\n";
		break;
	}
 	$quantity += 1;
 }
 echo "\n";
 if ($quantity == $howmanytasks) {
 	echo 'Congratulations, '.$name.'. You did it!'."\n";
 	echo "\n";
 }
