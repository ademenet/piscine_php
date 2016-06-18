#!/usr/bin/php
<?php
	define ("ERROR", "Incorrect Parameters");

	if ($argc == 4) {
		$argv = array_map('trim', $argv);
		switch ($argv[2]) {
			case '-':
				echo ($argv[1] - $argv[3]);
				break;
			case '+':
				echo ($argv[1] + $argv[3]);
				break;
			case '*':
				echo ($argv[1] * $argv[3]);
				break;
			case '/':
				echo ($argv[1] / $argv[3]);
				break;
			case '%':
				echo ($argv[1] % $argv[3]);
				break;
			default:
				echo ERROR;
				break;
		}
		echo "\n";
	}
	else
		echo ERROR . "\n";
 ?>
