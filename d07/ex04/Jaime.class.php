<?php

class Jaime extends Lannister {

	public function sleepWith($person) {
		if (is_a($person, 'Cersei'))
			print('With pleasure, but only in a tower in Winterfell, then.' . PHP_EOL);
		elseif (is_a($person, 'Sansa'))
			print('Let\'s do this.' . PHP_EOL);
		elseif (is_a($person, 'Tyrion'))
			print('Not even if I\'m drunk !' . PHP_EOL);
	}

}

?>
