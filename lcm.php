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
 for ($i = 1;$i <= $howmanytasks; ++$i) {
 	$num1 = mt_rand(1,100);
	$num2 = mt_rand(1,100);
	echo $num1.' and '.$num2."\n";
	$divsnum1 = [];
	$divsnum2 = [];
	$div1 = 2;
	$div2 = 2;
	while ($num1 > 1) {
		if ($num1 % $div1 == 0) {
			$divsnum1[] = $div1;
			$num1 /= $div1;
		}else { 
			++$div1;
		}
	}
	while ($num2 > 1) {
		if ($num2 % $div2 == 0) {
			$divsnum2[] = $div2;
			$num2 /= $div2;
		}else { 
			++$div2;
		}
	}
	$comdiv = array_intersect($divsnum1,$divsnum2);
	$diffdiv1 = array_diff($divsnum1,$divsnum2);
	$diffdiv2 = array_diff($divsnum2,$divsnum1);
	$lcm = (array_product($comdiv)) * (array_product($diffdiv1)) * (array_product($diffdiv2));
	$answer = readline('');
	if ($lcm == $answer) echo 'You are right!'."\n";
	else {
		echo 'You lose! Restart the game if you want play again.'."\n";
		break;
	}
 	$quantity += 1;
 }
 echo "\n";
 if ($quantity == $howmanytasks) { 
 	echo 'Congratulations, '.$name.'. You did it!'."\n";
 	echo "\n";
 }
