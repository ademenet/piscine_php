#!/usr/bin/php
<?php
	if ($argc > 1) {
		foreach (array_slice($argv, 1) as $arg)
			echo $arg . "\n";
	}
 ?>