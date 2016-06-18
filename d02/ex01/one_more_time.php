#!/usr/bin/php
<?php
	date_default_timezone_set('Europe/Paris');
	$pattern = '/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) (([0]?[1-9])|([1-2][0-9])|(3[01])) ([Jj]anvier|[Ff][ée]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]o[uû]t|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd][ée]cembre) (19[789]\d|[2-9]\d\d\d) ([0-1][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]/';
	$mois = array(
		'Janvier' => '1',
		'janvier' => '1',
		'Février' => '2',
		'février' => '2',
		'Fevrier' => '2',
		'fevrier' => '2',
		'Mars' => '3',
		'mars' => '3',
		'Avril' => '4',
		'avril' => '4',
		'Mai' => '5',
		'mai' => '5',
		'Juin' => '6',
		'juin' => '6',
		'Juillet' => '7',
		'juillet' => '7',
		'Aout' => '8',
		'aout' => '8',
		'Août' => '8',
		'août' => '8',
		'Septembre' => '9',
		'septembre' => '9',
		'Octobre' => '10',
		'octobre' => '10',
		'Novembre' => '11',
		'novembre' => '11',
		'Decembre' => '12',
		'decembre' => '12',
		'Décembre' => '12',
		'décembre' => '12'
	);
	if (preg_match($pattern, $argv[1]) === 1) {
		list($day, $nday, $month, $year, $hour, $min, $sec) = sscanf($argv[1], "%s %d %s %d %d:%d:%d");
		$month = $mois[$month];
		echo mktime($hour, $min, $sec, $month, $nday, $year) . "\n";
	} else {
		echo "Wrong Format\n";
	}
 ?>
