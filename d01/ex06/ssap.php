#!/usr/bin/php
<?php
	function ft_split($str) {
		$words = explode(' ', $str);
		$tab = array_filter($words);
		return($tab);
	}

	function ft_epur($str) {
		$str = trim($str);
		while ($str != str_replace('  ', ' ', $str))
			$str = str_replace('  ', ' ' , $str);
		return $str;
	}

	$str = "";
	$len = 0;
	$tab = array();
	if ($argc > 1) {
		if (isset($argv)) {
			$len = count($argv);
			for ($i = 1; $i < $len; $i++) {
				$str = $str . " " . $argv[$i];
			}
			$str = ft_epur($str);
			$tab = ft_split($str);
			sort($tab);
			foreach (array_slice($tab, 0) as $var) {
				echo $var . "\n";
			}
		}
	}
 ?>
