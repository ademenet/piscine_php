<?php
require_once('./includes/header.php');
session_start();
	if (!isset($_GET['add']))
	{}
	else if(isset($_GET['add']) && isset($_POST['quantite']) && is_numeric($_POST['quantite']) && intval($_POST['quantite']) > 0)
	{
		//print_r($_POST);
			if (isset($_SESSION['panier']))
			{
				$_SESSION['panier'][] = array(
					"name" => $_GET['add'],
					"quantity" => $_POST['quantite']
				);
			}
			else
				$_SESSION['panier'] = array();
	}
	else if (isset($_POST['quantite']))
		echo "<div class=\"box-alert\">Vous devez selectionner une quantite valide</div>";
	else
		echo "<div class=\"box-alert\">Vous devez rentrer une quantite</div>";
	if (isset($_GET['selection']))
	{
		if ($_GET['selection'] === "sport")
			$query = "SELECT * FROM jeux WHERE genre LIKE '%sport%'";
		else if ($_GET['selection'] === "combat")
			$query = "SELECT * from jeux";
		else if ($_GET['selection'] === "arcade")
			$query = "SELECT * FROM jeux WHERE genre LIKE '%arcade%'";
		else if ($_GET['selection'] === "aventure")
			$query = "SELECT * FROM jeux WHERE genre LIKE '%aventure%'";
		else
			$query = "SELECT * from jeux";
	}
	else
		$query = "SELECT * from jeux";
?>

<div class="menu_boutique">
	<h2>Categorie</h2>
	<?php
		$base = mysqli_connect('localhost', 'root', '', 'myDB');
		$ret = mysqli_query($base, "SELECT * FROM global");
		$donne = mysqli_fetch_array($ret);
		$donne = explode(":", $donne['conf']);
		echo "<ul class=\"categorie\">";
		foreach($donne as $genre)
		{
			echo "<a href=\"?selection=".$genre."\"><li>Jeux de ".$genre."</li></a>";
		}
		echo "</ul>";
	?>
</div>
<div class ="global_box">
<h1>Nos jeux</h1>
	<?php
		$base = mysqli_connect('localhost', 'root', '', 'myDB');
		$ret = mysqli_query($base, $query);
		while ($donne = mysqli_fetch_array($ret))
		{
			echo "<div class = \"object\">";
			echo "<h3 class = \"game_name\">".$donne['nom']."</h3>";
			echo "<img src=\"".$donne['img']."\" class = \"img_vignette\">";
			echo "<p class = \"prix\">".$donne['prix']." £</p>";
			echo "<form id = \"form:".$donne['nom']."\"action=\"?add=".$donne['nom']."\" method=\"post\">";
			echo "<p> Quantite : <input type=\"text\" name=\"quantite\" id= value=\"1\"/></p>";
			echo "<button form=\"form:".$donne['nom']."\" type=\"submit\" class = \"ajouter_panier\" >Ajouter au panier</button>";
			//echo "<a  class = \"ajouter_panier\" form=\"form:".$donne['nom']."\" type=\"submit\" value = \"".$donne['nom']."\">Ajouter au panier</a>";
			//echo "<a type=\"button\" class = \"ajouter_panier\" href=\"?add=".$donne['nom']."&selection=".$_GET['selection']."\">Ajouter au panier</a>";
		//	echo "<input type=\"submit\" name=\"submit\" class = \"ajouter_panier\" id=\"".$donne['nom']."\"value=\"Ajouter au panier\"/>";
			echo "</form>";
			echo "</div>";
		}
	?>
</div>

<?php require_once('./includes/footer.php'); ?>
