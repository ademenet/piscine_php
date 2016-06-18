<?php
$path = '../private/passwd';

if ($_POST['submit'] == 'OK') {
	if ($_POST['login'] == NULL || $_POST['passwd'] == NULL) {
		echo "ERROR\n";
	} else {
		$to_add = ['login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd'])];
		if (!file_exists($path)) {
			mkdir('../private');
			$data[] = $to_add;
			if (file_put_contents($path, serialize($data)) === FALSE) {
				echo "ERROR\n";
				exit;
			}
		} else {
			$data = unserialize(file_get_contents($path));
			foreach ($data as $value) {
				if ($to_add['login'] == $value['login']) {
					echo "ERROR\n";
					exit;
				}
			}
			$data[] = $to_add;
			file_put_contents($path, serialize($data));
		}
		echo "OK\n";
	}
} else {
	echo "ERROR\n";
}

 ?>
