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
		$spa = str_split($a);
		$spb = str_split($b);
		$diff = array_udiff($spa, $spb, 'strcasecmp');
		$key = key($diff);
		if (ctype_alpha($a[$key]) && ctype_alpha($b[$key]))
			return strcasecmp($a[$key], $b[$key]);
		elseif (ctype_alpha($a[$key]) && !(ctype_alpha($b[$key])))
			return -1;
		elseif (!(ctype_alpha($a[$key])) && ctype_alpha($b[$key]))
			return 1;
		elseif (ctype_digit($a[$key]) && ctype_digit($b[$key]))
			return strcmp($a[$key], $b[$key]);
		elseif (ctype_digit($a[$key]) && ctype_alpha($b[$key]))
			return 1;
		elseif (ctype_alpha($a[$key]) && ctype_digit($b[$key]))
			return -1;
		elseif (ctype_digit($a[$key]) && !(ctype_digit($b[$key])) && !(ctype_alpha($b[$key])))
			return -1;
		elseif (!(ctype_digit($a[$key])) && !(ctype_alpha($a[$key])) && ctype_digit($b[$key]))
			return 1;
		elseif (!(ctype_digit($a) && ctype_alpha($a)) && !(ctype_digit($b) && ctype_alpha($b)))
			return strcmp($a, $b);
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
