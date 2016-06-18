<?php require_once('includes/header.php'); ?>

<?php
if (isset($_GET['action'])) {
	echo "<script>confirm(\"Êtes-vous sûr de vouloir supprimer votre compte ?\")</script>";
	del_user($_SESSION['userinfo']['login']);
	$_SESSION['userinfo'] = "";
	echo "<script>setTimeout(\"document.location.href = 'index.php';\",2000);</script>";
}
 ?>

<body>
	<div class="user-account">
		<h3>Administration du compte de <?php echo $_SESSION['userinfo']['login'] ?></h3>
		<table>
			<tr>
				<td>Nom</td>
				<td><?php echo $_SESSION['userinfo']['nom']; ?></td>
			</tr>
			<tr>
				<td>Prénom</td>
				<td><?php echo $_SESSION['userinfo']['prenom']; ?></td>
			</tr>
			<tr>
				<td>Mail</td>
				<td><?php echo $_SESSION['userinfo']['mail']; ?></td>
			</tr>
			<tr>
				<td>Adresse</td>
				<td><?php echo $_SESSION['userinfo']['adresse']; ?></td>
			</tr>
			<tr>
				<td>Téléphone</td>
				<td><?php echo $_SESSION['userinfo']['tel']; ?></td>
			</tr>
		</table>
		<a href="?action=deluser">Supprimer mon compte</a>
	</div>
</body>

<?php require_once('includes/footer.php'); ?>
