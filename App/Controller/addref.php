<?php

session_start();

include("../Modele/Reference.php");
include("../Modele/Base.php");

if($_POST['nom'] != "" and $_POST['lien'] != "")
{
	$o = new Reference($_POST['nom'], $_SESSION['auteur'], date("F j, Y, g:i a"), $_POST['lien']);

	$nom = $o->getNom();
	$auteur = $o->getAuteur();
	$date = $o->getDate();
	$lien = $o->getLien();

	$base = new Base('e-miage', 'localhost', 'root', 'root');

	$base->on();

	// on crée la requête SQL 
	$sql = 'INSERT INTO Reference (nom, auteur, date, lien) VALUES ("'.$nom.'", "'.$auteur.'", "'.$date.'", "'.$lien.'")'; 

	// on envoie la requête 
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

	$base->off();

	header('Location: ../Vue/PC/documents.php');

}
else{
	header('Location: ../Vue/PC/documents.php');
}