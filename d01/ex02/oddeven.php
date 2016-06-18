#!/usr/bin/php
<?php
	while (1) {
		echo "Entrez un nombre: ";
		if ($av = fgets(STDIN)) {
			$nb = trim($av);
			if (is_numeric($nb)) {
				if ($nb % 2 == 0)
					echo "Le chiffre " . $nb . " est Pair\n";
				else
					echo "Le chiffre " . $nb . " est Impair\n";
			}
			else
				echo("'$nb' n'est pas un chiffre\n");
		}
		else {
			echo "\n";
			return;
		}
	}
 ?>