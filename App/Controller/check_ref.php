<?php 

include("../../Modele/Base.php");

$base = new Base();

$base->on();

// on crée la requête SQL 
$sql = ' SELECT * FROM Reference ORDER BY date DESC'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

$base->off();