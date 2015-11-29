<?php 


class Base{
	var $base = "e-miage";
	var $host = "localhost";
	var $login = "root";
	var $mdp = "root";

	function __construct(){
	}

	function on(){
		// on se connecte à MySQL 
		$db = @mysql_connect($this->host, $this->login, $this->mdp);

		// on sélectionne la base 
		mysql_select_db($this->base, $db);
	}

	function off(){
		// on ferme la connexion à mysql 
		mysql_close(); 
	}
}