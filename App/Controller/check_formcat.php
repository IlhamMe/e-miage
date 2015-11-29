<?php 

if (isset($_POST['set'])) {

	include("../Modele/Base.php");

	$base = new Base();

	$base->on();

	// on crée la requête SQL 
	$sql = 'UPDATE categorie SET contenu ="'.addslashes($_POST['contenu']).'", titre ="'.addslashes($_POST['titre']).'" WHERE id='.$_POST['id'].''; 

	// on envoie la requête 
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

	$base->off();

	header('Location: ../Vue/PC/contents.php');

}else if(isset($_POST['remove'])){
	// Démarage d'une séssion utilisateur

	include("../Modele/Base.php");

	$base = new Base();

	$base->on();

	// on crée la requête SQL 
	$sql = ' DELETE FROM categorie WHERE id='.$_POST['id'].' ';

	// on envoie la requête 
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

	$base->off();

	header('Location: ../Vue/PC/contents.php');
}

 ?>