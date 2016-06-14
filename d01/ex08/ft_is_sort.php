<?php
	function ft_is_sort($array) {
		if (isset($array) && is_array($array)) {
			$flag = false;
			$sorted = $rsorted = $default = array_values($array);
			sort($sorted);
			rsort($rsorted);
			if ($default === $sorted)
				$flag = true;
			elseif ($default === $rsorted)
				$flag = true;
			return $flag;
		}
	}
 ?>
