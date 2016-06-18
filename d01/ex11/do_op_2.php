#!/usr/bin/php
<?php
	define ("PARAM", "Incorrect Parameters\n");
	define ("SYNTAX", "Syntax Error\n");

	function is_space($str) {
		return $str != ' ';
	}

	function negatives($tab) {
		$len = count($tab);
		if ($len == 4) {
			if ($tab[0] == '-' && is_numeric($tab[1])) {
				$tab[0] = "-$tab[1]";
				$tab[1] = $tab[2];
				$tab[2] = $tab[3];
			} elseif ($tab[2] == '-' && is_numeric($tab[3])) {
				$tab[2] = "-$tab[3]";
			} else {
				echo SYNTAX;
				exit;
			}
		} elseif ($len == 5) {
			if ($tab[0] === '-' && is_numeric($tab[1]) && $tab[3] === '-' && is_numeric($tab[4])) {
				$tab[0] = "-$tab[1]";
				$tab[1] = $tab[2];
				$tab[2] = "-$tab[4]";
			} else {
				echo SYNTAX;
				exit;
			}
		}
		return ($tab);
	}

	function mysplit($str) {
		if (is_string($str)) {
			$str = trim($str);
			$tab = preg_split('/([+-\/\*%\s])/', $str, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
			$tab = array_filter($tab, "is_space");
			$tab = array_values($tab);
			$tab = negatives($tab);
			if (!(is_numeric($tab[0]) && is_numeric($tab[2]) && preg_match('/[+-\/\*%]/', $tab[1]))) {
				echo SYNTAX;
				exit;
			}
			return $tab;
		}
	}

	if ($argc == 2) {
		$tab = mysplit($argv[1]);
		switch ($tab[1]) {
			case '-':
				echo ($tab[0] - $tab[2]) . "\n";
				break;
			case '+':
				echo ($tab[0] + $tab[2]) . "\n";
				break;
			case '*':
				echo ($tab[0] * $tab[2]) . "\n";
				break;
			case '/':
				echo ($tab[0] / $tab[2]) . "\n";
				break;
			case '%':
				echo ($tab[0] % $tab[2]) . "\n";
				break;
			default:
				break;
		}
	}
	else
		echo PARAM;
 ?>
