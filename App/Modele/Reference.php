<?php 

class Reference{

	var $id;
	var $nom;
	var $auteur;
	var $date;
	var $lien;

	function __construct(String $n, String $a, Strin $d, String $l){
		$this->nom = $n;
		$this->auteur = $a;
		$this->date = $d;
		$this->lien = $l;
	}

	function setId($n){
		$this->id = $n;
	}

	function getId(){
		return $this->id;
	}

	function setNom($n){
		$this->nom = $n;
	}

	function getNom(){
		return $this->nom;
	}

	function setAuteur($a){
		$this->auteur = $a;
	}

	function getAuteur(){
		return $this->auteur;
	}

	function setDate($d){
		$this->date = $d;
	}

	function getDate(){
		return $this->date;
	}

	function setLien($l){
		$this->lien = $l;
	}

	function getLien()){
		return $this->lien;
	}
}

?>