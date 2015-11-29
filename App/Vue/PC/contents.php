<?php

session_start();

include("../../Controller/check_cat.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Espace collaboratif de travail
	</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">	
</head>
<body>
<div>
	<nav>
		<ul>
			<li><a href="documents.php">Accéder aux documents de travail</a></li>
			<li><a href="contents.php">Gérer les contenus du site</a></li>
		</ul>
	</nav>
	<form action="../../Controller/addcat.php" method="post">
	  Titre: <input type="text" name="titre">
	  <input type="submit" value="Ajouter une catégorie">
	</form>
</div>

<form action="contents.php" method="post">
	<ul id="cats">
	<?php
		// Affichage des references existante 
		while($row = mysql_fetch_array($req)){
			print("<li>");
			print("<input type='submit' name='titre' value='".$row['titre']."'>");
			print("</input>");
			print('</li>');
		}
	?>
	</ul>
</form>

<?php if(isset($_POST['titre'])){ ?>
		<?php 
			include("../../Controller/getcat.php");
			$row = mysql_fetch_array($req);
		?>

			<form action="../../Controller/check_formcat.php" method="post" id="catform">
				<input type="text" name="titre" value="<?php echo $row['titre'] ?>"></input><br>
				<input type="hidden" name="id" value="<?php echo $row['id'] ?>"></input><br>
				<textarea name="contenu"><?php echo $row['contenu'] ?></textarea><br>
				<input type="submit" name="set" value="Mettre à jour"></input><br>
				<input type="submit" name="remove" value="Supprimer cette catégorie"></input>
			</form>

<?php } ?>
</body>
</html>