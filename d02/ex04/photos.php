#!/usr/bin/php
<?php
	if ($argc == 2) {
		if (preg_match('/:\/\/(.*?)\//i', $argv[1], $match))
			$urlname = $match[1];
		else
			$urlname = preg_replace('/^.*?:\/\//i', '', $argv[1]);
		if (mkdir("$urlname/")) {
			$page = file($argv[1]);
			foreach ($page as $value) {
				preg_match('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $value, $matches);
				if ($matches[1]) {
					$file = $matches[1];
					$filename = basename($matches[1]);
					if (preg_match('/(jpg|png|jpeg|gif|bmp)$/i', $filename)) {
						file_put_contents("$urlname/$filename", file_get_contents($file));
					}
				}
			}
		}
	}
?>
