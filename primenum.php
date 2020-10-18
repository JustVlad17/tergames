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
 	$num = mt_rand(1,100);
 	echo 'Is '.$num.' prime?'."\n";
 	$answer = readline('');
	$divs = [];
 	for ($j = 1; $j <= $num; ++$j) {
		if ($num % $j == 0) $divs[] = $j;
	}
	if ((count($divs) == 2 && $answer == 'yes') || (count($divs) != 2 && $answer == 'no')) echo 'You right!'."\n";
	else {
		echo 'You lose. Please restart game if you want play again.'."\n";
		break;
	}
 	$quantity += 1;
 }
 echo "\n";
 if ($quantity == $howmanytasks) {
 	echo 'Congratulations, '.$name.'. You did it!'."\n";
 	echo "\n";
 }
