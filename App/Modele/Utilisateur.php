<?php 

class Utilisateur{

	var $nom;
	var $prenom;
	var $login;
	var $mdp;
	var $email;

	function __construct($n, $p, $l, $password, $e){
		$this->nom = $n;
		$this->prenom = $p;
		$this->login = $l;
		$this->mdp = $password;
		$this->email = $e;
	}

	function addRef(){
		// ajouter un nouveau lien de referances
	}

	function setCategorie(){
		// modifier une catégorie
	}

	function connecte(){
		// se connecter
	}

	function deconnecte(){
		//se deconnecter
	}

	function setNom($n){
		$this->nom = $n;
	}

	function getNom(){
		return $this->nom;
	}

	function setPrenom($p){
		$this->prenom = $p;
	}

	function getPrenom(){
		return $this->prenom;
	}

	function setLogin($l){
		$this->login = $l;
	}

	function getLogin(){
		return $this->login;
	}

	function setMdp($m){
		$this->mdp = $m;
	}

	function getMdp(){
		return $this->mdp;
	}

	function setEmail($e){
		$this->email = $e;
	}

	function getEmail(){
		return $this->email;
	}
}