#!/usr/bin/php
<?php
	$answer = rand(0, 1);
	if ($argc == 2) {
		if (strcmp($argv[1], "mais pourquoi cette demo ?") === 0) {
			echo "Tout simplement pour qu'en feuilletant le sujet\non ne s'apercoive pas de la nature de l'exo\n";
		} elseif (strcmp($argv[1], "mais pourquoi cette chanson ?") == 0) {
			echo "Parce que Kwame a des enfants\n";
		} elseif (strcmp($argv[1], "vraiment ?") == 0 && $answer == 0) {
			echo "Nan c'est parce que c'est le premier avril\n";
		} elseif (strcmp($argv[1], "vraiment ?") == 0 && $answer == 1) {
			echo "Oui il a vraiment des enfants\n";
		}

	}
 ?>
