<?php
// On demarre une session pour l'admin
session_start();
require_once('./includes/header.php');
include("./includes/functions.php");

// On appelle le header
 ?>

<!-- On charge le CSS sur cette page -->
<link rel="stylesheet" href="../css/master.css">
<!-- Le contenu du panel admin -->
<div class="admin-panel">
	<h1>Bienvenue <?php echo $_SESSION['admin']; ?></h1>
	<div class="">

<?php
// On repere si on est bien en session d'admin
if (isset($_SESSION['admin'])) {
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'add') {
			if (isset($_POST['submit'])) {
				if ($_POST['title'] && $_POST['desc'] && $_POST['price']) {
					add_product($_POST['title'], $_POST['price'], $_POST['desc'],0,0,0,1,"../zbri","foot", 42);
					// requete pour mettre les infos dedans
				} else {
					echo "PAS OK\n";
					// message d'erreur
				}
			}
 ?>

<form action="" method="POST">
	<p>Nom du produit : <input type="text" name="title" value=""></p><br />
	<p>Description : <input type="text" name="desc" value=""></p><br />
	<p>Prix : <input type="text" name="price" value=""></p>
	<input type="submit" name="Ajouter" value="OK">
</form>

<?php
		}
		elseif ($_GET['action'] == modify) {

		}
		elseif ($_GET['action'] == delete) {
			if ($_POST['delete'] == "OK" && isset($_POST['deleted_game']))
			{
				rm_product($_POST['deleted_game']);
			}
?>
	<form action="" method="post">
		<p>Nom du produit a suprimer : <input type="text" name="deleted_game" value="Barbie land" /></p>
		<input type="submit" name="delete" value="OK" />
	</form>
<?php

		}
		else {
			ft_error();
		}
	}
} else {
	header('Location: ../index.php');
}
 ?>
		<a href="?action=add">Ajouter un produit</a>
		<a href="?action=modify">Modifier un produit</a>
		<a href="?action=delete">Supprimer un produit</a>
	</div>

</div>

<?php require_once('./includes/footer.php'); ?>
