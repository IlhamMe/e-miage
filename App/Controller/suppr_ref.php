<?php 

if (isset($_GET['id'])) {
	
	// Démarage d'une séssion utilisateur

	include("../Modele/Base.php");

	$base = new Base('e-miage', 'localhost', 'root', 'root');

	$base->on();

	// on crée la requête SQL 
	$sql = ' DELETE FROM reference WHERE id='.$_GET['id'].' ';

	// on envoie la requête 
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

	$base->off();
	
	header('Location: ../Vue/PC/documents.php');
}else{
	header('Location: ../Vue/PC/documents.php');
}