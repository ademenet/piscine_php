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

	$tab = array();
	if ($argc > 1) {
		$str = ft_epur($argv[1]);
		$tab = ft_split($str);
		$save = $tab[0];
		$str = "";
		foreach (array_slice($tab, 1) as $value) {
			$str = $str . $value . " ";
		}
		$str = trim($str);
		echo $str . " " . $save . "\n";
	}
 ?>
