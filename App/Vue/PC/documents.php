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
	  Nom du document: <input type="text" name="nom"><br>
	  Lien: <input type="text" name="lien" placeholder="http://..."><br>
	  <input type="submit" value="Ajouter une référence">
	</form>
</div>

<table>
	<thead>
		<th>Nom du document</th>
		<th>Auteur</th>
		<th>Lien</th>
		<th>Date</th>
	</thead>
	<tbody>
<?php
	// Affichage des references existante 
	while($row = mysql_fetch_array($req)){
		print("<tr>");
		print("<td>".$row['nom']."</td>"."<td>".$row['auteur']."</td>"."<td><a href='".$row['lien']."'>".$row['lien']."</a></td>"."<td>".$row['date']."</td>");
		print('</tr>');
	}
?>
	</tbody>
</table>

</body>
</html>