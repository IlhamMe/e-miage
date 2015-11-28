<?php 


class Base{
	var $base;
	var $host;
	var $login;
	var $mdp;

	function __construct($base, $host, $login, $mdp){
		$this->base = $base;
		$this->host = $host;
		$this->login = $login;
		$this->mdp = $mdp;
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