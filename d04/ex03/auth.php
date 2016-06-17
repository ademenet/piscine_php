<?php
function auth($login, $passwd) {
	$path = '../private/passwd';

	if (file_exists($path)) {
		$data = unserialize(file_get_contents($path));
		foreach ($data as $key => $value) {
			if ($login == $value['login'] && hash('whirlpool', $passwd) == $value['passwd']) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
	} else {
		echo "ERROR\n";
	}
}
 ?>
