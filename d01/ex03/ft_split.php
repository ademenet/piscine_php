<?php
	function ft_split($str) {
		$words = explode(' ', $str);
		$tab = array_filter($words);
		sort($tab);
		return($tab);
	}
 ?>