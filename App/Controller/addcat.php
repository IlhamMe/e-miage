<?php

session_start();

include("../Modele/Categorie.php");
include("../Modele/Base.php");

if($_POST['titre'] != "")
{
	$o = new Categorie($_POST['titre'], "");

	$titre = addslashes($o->getTitre());
	$contenu = addslashes($o->getContenu());

	$base = new Base('e-miage', 'localhost', 'root', 'root');

	$base->on();

	// on crée la requête SQL 
	$sql = 'INSERT INTO categorie (titre, contenu) VALUES ("'.$titre.'", "'.$contenu.'")'; 

	// on envoie la requête 
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

	$base->off();

	header('Location: ../Vue/PC/contents.php');

}
else{
	header('Location: ../Vue/PC/contents.php');
}