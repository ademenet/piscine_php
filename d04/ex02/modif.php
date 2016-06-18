<?php
$path = '../private/passwd';

if ($_POST['submit'] == 'OK') {
	if ($_POST['login'] == NULL || $_POST['oldpw'] == NULL || $_POST['newpw'] == NULL) {
		echo "ERROR\n";
	} else {
		if (file_exists($path)) {
			$data = unserialize(file_get_contents($path));
			foreach ($data as $key => $value) {
				if ($_POST['login'] == $value['login']) {
					if (hash('whirlpool', $_POST['oldpw']) == $value['passwd']) {
						$data[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
						file_put_contents($path, serialize($data));
						echo "OK\n";
					} else {
						echo "ERROR\n";
					}
				}
			}
		} else {
			echo "ERROR\n";
		}
	}
} else {
	echo "ERROR\n";
}
 ?>
