<?php

class Lannister {
	public function __construct() {
		print("A Lannqsfcefister is born !" . PHP_EOL);
	}
	public function getSize() {
		return "Cpucpuc";
	}
	public function houseMotto() {
		return "qsqs roar!";
	}
}

include('Tyrion.class.php');

$tyrion = new Tyrion();

print($tyrion->getSize() . PHP_EOL);
print($tyrion->houseMotto() . PHP_EOL);
?>
