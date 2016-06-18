#!/usr/bin/php
<?php
	date_default_timezone_set("Europe/Paris");
	$filename = "/var/run/utmpx";
	if (!$fp = fopen($filename, 'rb'))
		return 0;
	$i = 0;
	while ($data = fread($fp, 628)) {
		$tab = unpack('a256user/a4id/a32line/ipid/Itype/I2time/a256host', $data);
		if ($tab[type] == 7) {
			printf("% -7s % -7s  %12s\n", $tab[user], $tab[line], date("M j H:i", $tab[time1]));
			$i++;
		}
	}
	fclose($fp);
 ?>
