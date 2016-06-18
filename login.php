<?php
session_start();

include('includes/functions.php');

$_SESSION['userinfo'] = "";

if ($_POST['submit'] === "Connexion") {
	if (isset($_POST['usrlog']) && isset($_POST['usrpwd']) && !empty($_POST['usrlog']) && !empty($_POST['usrpwd'])) {
		if (check_login($_POST['usrlog'])) {
			if (!check_passwd($_POST['usrlog'], $_POST['usrpwd'])) {
				alert("Désolé, ce n'est pas le bon mot de passe");
			} else {
				$_SESSION['userinfo'] = get_userinfos($_POST['usrlog']);
				valid("Bienvenue ".$_SESSION['userinfo']['login']." sur we&#10084games");
				echo "<script>setTimeout(\"document.location.href = 'index.php';\",2000);</script>";
			}
		} else {
			alert("Désolé, ce n'est pas le bon login");
		}
	}
	else {
		alert("Veuillez remplir tous les champs");
	}
}
 ?>
<html>
	<link rel="stylesheet" href="./css/master.css" media="screen" title="no title" charset="utf-8">

	<div class="login-form">
		<h1>Connexion</h1>
		<form action="" method="POST">
			<p>Veuillez entrer votre login :<input type="text" name="usrlog" value=""></p>
			<p>Veuillez entrer votre mot de passe :<input type="password" name="usrpwd" value=""></p>
			<input type="submit" name="submit" value="Connexion">
		</form>
	</div>
</html>
