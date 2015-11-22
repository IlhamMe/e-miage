<?php 

include("../Modele/Base.php");

$base = new Base('e-miage', 'localhost', 'root', 'root');

$base->on();

// on crée la requête SQL 
$sql = ' SELECT * FROM Utilisateur WHERE login="'.$_POST['username'].'" AND mdp="'.$_POST['psw'].'"'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

// on en fait un ligne exploitable
$row = mysql_fetch_array($req);

if (!empty($row)) { // si différents de vide c'est que l'utilisateur et le login sont correctes
	header('Location: ../Vue/index.php');
}
else{ // sinon on retourne à la page de connexion pour réessayer
	header('Location: ../Vue/login.php');
}

$base->off();