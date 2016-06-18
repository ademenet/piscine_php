<?php require_once('includes/header.php'); ?>

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
	</div>
</body>

<?php require_once('includes/footer.php'); ?>
