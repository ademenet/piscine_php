<?php

class UnholyFactory {

	private $_army = array();

	public function absorb($fighter) {
		if ($fighter instanceof Fighter)
		{
			if (in_array($fighter, $this->_army)) {
				print('(Factory already absorbed a fighter of type ' . $fighter->name . ')' . PHP_EOL);
			} else {
				print('(Factory absorbed a fighter of type ' . $fighter->name . ')' . PHP_EOL);
			}
			$this->_army[] = $fighter;
		}
		else {
			print('(Factory can\'t absorb this, it\'s not a fighter)' . PHP_EOL);
		}
	}

	public function fabricate($requested_fighters) {
		foreach ($this->_army as $warrior) {
			if ($requested_fighters == $warrior->name) {
				print('(Factory fabricates a fighter of type ' . $requested_fighters . ')' . PHP_EOL);
				return $warrior;
			}
		}
		print('(Factory hasn t absorbed any fighter of type ' . $requested_fighters . ')' . PHP_EOL);
		return;
	}

}

?>
