<?php
	if ($_GET)) {
		if ($_GET['action'] == "set") {
			setcookie($_GET['name'], $_GET['value']);
		}
		if ($_GET['action'] == "get") {
			if ($_COOKIE[$_GET['value']]) {
				echo $_COOKIE[$_GET['value']] . "\n";
			}
		}
		if ($_GET['action'] == "del") {
			setcookie($_COOKIE[$_GET['name']], '', time() - 3600);
		}
	}
 ?>
