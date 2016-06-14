<?php
// il faut utiliser casesort et voir s'il est trie dans un sens ou dans l'autre
	function ft_is_sort($array) {
		if (isset($array) && is_array($array)) {
			$sorted = $default = array_values($array);
			sort($sorted);
			return $default === $sorted;
		}
	}
 ?>
