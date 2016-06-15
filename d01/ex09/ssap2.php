#!/usr/bin/php
<?php
	function ft_split($str) {
		if (is_string($str)) {
			$words = explode(' ', $str);
			$tab = array_filter($words);
			return($tab);
		}
	}

	function ft_epur($str) {
		$str = trim($str);
		while ($str != str_replace('  ', ' ', $str))
			$str = str_replace('  ', ' ' , $str);
		return $str;
	}

	function array_swap ($tab, $index1, $index2) {
		$tmp = $tab[$index1];
		$tab[$index1] = $tab[$index2];
		$tab[$index2] = $tmp;
	}

	function mysort($a, $b) {
		$i = 0;
		if (ctype_alpha($a) && ctype_alpha($b))
			return strcasecmp($a, $b);
		elseif (ctype_alpha($a) && !(ctype_alpha($b)))
			return -1;
		elseif (!(ctype_alpha($a)) && ctype_alpha($b))
			return 1;
		elseif (ctype_digit($a) && ctype_digit($b))
			return strcmp($a, $b);
		elseif (ctype_digit($a) && ctype_alpha($b))
			return 1;
		elseif (ctype_alpha($a) && ctype_digit($b))
			return -1;
		elseif (ctype_digit($a) && !(ctype_digit($b)) && !(ctype_alpha($b)))
			return -1;
		elseif (!(ctype_digit($a)) && !(ctype_alpha($a)) && ctype_digit($b))
			return 1;
		elseif (!(ctype_digit($a) && ctype_alpha($a)) && !(ctype_digit($b) && ctype_alpha($a)))
			return strcmp($a, $b);
		else {
			$i = 0;
			while ($a[$i] - $b[$i] === 0 && (empty($a[$i]) || empty($b[$i]))) {
				$i++;
			}
			return (mysort($a[$i], $b[$i]));
		}

	}

	$str = "";
	$len = 0;
	$tab = array();
	if ($argc > 1) {
		$len = count($argv);
		for ($i = 1; $i <= $len; $i++) {
			$str = $str . " " . $argv[$i];
		}
		$str = ft_epur($str);
		$tab = ft_split($str);
		usort($tab, "mysort");
		foreach (array_slice($tab, 0) as $var) {
			echo $var . "\n";
		}
	}
 ?>
