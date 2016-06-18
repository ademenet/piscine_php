#!/usr/bin/php
<?php
	$file = file_get_contents("$argv[1]");
	function in_link($match) {
		$match[0] = preg_replace_callback('/title="(.*)"/U', function ($m) {
			return preg_replace("/".$m[1]."/", strtoupper($m[1]), $m[0]);
		}, $match[0]);
		$match[0] = preg_replace_callback('/>([\D|.]*)</U', function ($m) {
			return preg_replace("/".$m[1]."/", strtoupper($m[1]), $m[0]);
		}, $match[0]);
		return $match[0];
	}
	$loupe = preg_replace_callback('/<a([\D|.]*?)\s*<\/a>/im', 'in_link', $file);
	echo $loupe;
 ?>
