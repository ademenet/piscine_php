<?php

include_once('Lannister.class.php');
include_once('Jaime.class.php');
include_once('Tyrion.class.php');

class Stark {
}

class Cersei extends Lannister {
}

class Sansa extends Stark {
}

$j = new Jaime();
$c = new Cersei();
$t = new Tyrion();
$s = new Sansa();

$j->sleepWith($t); // Not even if I'm drunk ! lann lann
$j->sleepWith($s); // Let's do this. lann stark
$j->sleepWith($c); // With pleasure, but only in a tower in Winterfell, then. lann lann

$t->sleepWith($j); // Not even if I'm drunk ! lann lann
$t->sleepWith($s); // Let's do this. lann stark
$t->sleepWith($c); // Not even if I'm drunk ! lann lann

?>
