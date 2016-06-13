#!/usr/bin/php
<?php
	if ($argc > 1) {
		if (isset($argv)) {
			foreach (array_slice($argv, 1) as $arg)
				echo $arg . "\n";
		}
	}
 ?>