<?php
	function ft_split($str) {
		if (is_string($str)) {
			$words = explode(' ', $str);
			$tab = array_filter($words);
			sort($tab);
			return($tab);
		}
	}
 ?>
