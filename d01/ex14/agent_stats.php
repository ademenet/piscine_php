#!/usr/bin/php
<?php
	if ($argc == 2) {
		$data = array();
		$i = 0;
		while (!feof(STDIN)) {
			$f = fgets(STDIN);
			$line = explode(';', $f);
			$data[$i] = array(
				'User' => $line[0],
				'Note' => $line[1],
				'Noteur' => $line[2],
				'Feedback' => $line[3]
			);
			$i++;
		}
		if (strcmp($argv[1], "moyenne") === 0) {
			$sum = 0;
			$total = 0;
			foreach ($data as $array) {
				if (isset($array['Note'])) {
					$sum += $array['Note'];
					$total++;
				}
			}
			echo ($sum / $total) . "\n";
		}
		// elseif (strcmp($argv[1], "moyenne_user") {
		// 	return ;
		// }
		// } elseif (strcmp($argv[1], "ecart_moulinette")) {
		// 	return ;
		// }
	}
 ?>
