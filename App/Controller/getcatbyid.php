<?php 

// Démarage d'une séssion utilisateur

$base = new Base('e-miage', 'localhost', 'root', 'root');

$base->on();

// on crée la requête SQL 
$sql = ' SELECT * FROM categorie WHERE id="'.$_GET['id'].'" '; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

$base->off();