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
 	$num1 = mt_rand(1,10);
	$num2 = mt_rand(1,10);
	$operations = ['+','-','*','/'];
	$operation = $operations[mt_rand(0, count($operations) - 1)];
 	echo $num1.' '.$operation.' '.$num2.' ='."\n";
 	$answer = readline('');
	if ($operation == '-' && ($num1-$num2 == $answer)) echo 'You are right!'."\n";
	elseif ($operation == '+' && ($num1+$num2 == $answer)) echo 'You are right!'."\n";
	elseif ($operation == '*' && ($num1*$num2 == $answer)) echo 'You are right!'."\n";
	elseif ($operation == '/' && (round($num1/$num2, 2) == round($answer, 2))) echo 'You are right!'."\n";
	else {
		echo 'You lose. Restart game if you want to play again.'."\n";
	      	break;
	}
 	$quantity += 1;
 }
 echo "\n";	
 if ($quantity == $howmanytasks) {
 	echo 'Congratulations, '.$name.'. You did it!'."\n";
 	echo "\n";
 }
 	
