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
 	$number = mt_rand(1,100);
 	echo 'Is '.$number.' even?'."\n";
 	$answer = readline('');
 	if (($number % 2 == 0 && $answer == 'yes') || ($number % 2 != 0 && $answer == 'no')) {
		echo 'You are right!'."\n";
 	}else {
		echo 'You lose!. Restart game if you play again'."\n";
		break;
	}
 $quantity += 1;
 }
 echo "\n";
 if ($quantity == $howmanytasks) {
 	echo 'Congratulations, '.$name.'. You did it!'."\n";
 	echo "\n";
 }
