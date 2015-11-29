<?php 

// Démarage d'une séssion utilisateur

$base = new Base();

$base->on();

// on crée la requête SQL 
$sql = ' SELECT * FROM categorie WHERE titre="'.$_POST['titre'].'" '; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

$base->off();