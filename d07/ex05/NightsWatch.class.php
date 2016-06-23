<?php

include_once('IFighter.class.php');

class NightsWatch implements IFighter {

	private $army = array();

	public function recruit($person) {
		$this->army[] = $person;
	}

	public function fight() {
		foreach ($this->army as $fighter) {
			if ($fighter instanceof IFighter) {
				$fighter->fight();
			}
		}
	}

}

?>
