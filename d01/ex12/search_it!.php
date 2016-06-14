#!/usr/bin/php
<?php
	if ($argc > 2) {
		$key = $argv[1];
		$result = array();
		for ($i = 2; $i < $argc; $i++) {
			$tab = explode(':', $argv[$i]);
			if ($tab[0] === $key)
				$result[] = $tab[1];
		}
		$len = count($result);
		echo $result[$len - 1];
		if ($len != 0)
			echo "\n";
	}
 ?>
