<?php

session_start();


include("../../Controller/check_ref.php");

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
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="../../Modele/Jquery/jquery.autocomplete.min.js"></script>
</head>
<body>
<div>
	<nav>
		<ul>
			<li><a href="documents.php">Accéder aux documents de travail</a></li>
			<li><a href="contents.php">Gérer les contenus du site</a></li>
		</ul>
	</nav>
	<form action="../../Controller/addref.php" method="post">
	  Nom du document: <input type="text" name="nom">
	  Lien: <input type="text" name="lien" placeholder="http://...">
	  <input type="submit" value="Ajouter une référence" id="buttonref">
	</form>
</div>

	<form method="post" action="documents.php" id="autocomplete">
		<input type="text" placeholder="Rechercher un document" name="rechercheNom" id="input_searchNom" onkeyup="autocomplet();">
	</form>

<table>
	<thead>
		<th>Nom du document</th>
		<th>Auteur</th>
		<th>Lien</th>
		<th>Date</th>
		<th>Action</th>
	</thead>
	<tbody  id="search_list_id">
<?php
	// Affichage des references existante 
	while($row = mysql_fetch_array($req)){
		print("<tr>");
		print("<td>".$row['nom']."</td>"."<td>".$row['auteur']."</td>"."<td><a href='".$row['lien']."'>".$row['lien']."</a></td>"."<td>".$row['date']."</td>"."<td><a href='../../Controller/suppr_ref.php?id=".$row['id']."'>x</a></td>");
		print('</tr>');
	}
?>
	</tbody>
</table>

</body>
</html>