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

	function mysort($tab) {
		if (is_array($tab)) {
			$len = count($tab);
			for ($i = 0; $i < $len; $i++) {
				echo "strcasecmp " . $tab[$i] . " " . $tab[$i + 1] . " == " . strcasecmp($tab[$i], $tab[$i + 1]) . "\n";
				if (strcasecmp($tab[$i], $tab[$i + 1]) > 0)
					array_swap($tab, $i, $i + 1);
			}
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
		print_r($tab);
		mysort($tab);
		foreach (array_slice($tab, 0) as $var) {
			echo $var . "\n";
		}
	}
 ?>
