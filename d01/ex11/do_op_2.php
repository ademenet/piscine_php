#!/usr/bin/php
<?php
	var_dump($arg);
// Ici on pourrait utiliser plusieurs fonctions de split :
// explode (sorte de strsplit) et preg_split.

// list($nb1, $nb2) = explode("", $arg);
array preg_split("+-*/", $arg);

function calcul($a, $b) {
	$add = $a + $b;
	$sou = $a - $b;
	$mul = $a * $b;
	$div = $a / $b;
	return array($add, $sou, $mul, $div);
}

list($add, $sou, $mul, $div) = calcul($arg1, $arg2);

 ?>
