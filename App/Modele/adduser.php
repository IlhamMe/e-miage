<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
</body>
</html>


<?php 

include("Utilisateur.php");
include("Base.php");

echo "debut du test \n";

$o = new Utilisateur("Mestari", "Ilham", "ilham", "ilham", "ilham.mestari@gmail.com");

$nom = $o->getNom();
$prenom = $o->getPrenom();
$login = $o->getLogin();
$mdp = $o->getMdp();
$email = $o->getEmail();

$base = new Base('e-miage', 'localhost', 'root', 'root');

$base->on();

// on crée la requête SQL 
$sql = 'INSERT INTO Utilisateur (nom, prenom, login, mdp, email) VALUES ("'.$nom.'", "'.$prenom.'", "'.$login.'", "'.$mdp.'", "'.$email.'")'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

 $base->off();


 ?>