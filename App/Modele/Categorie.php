<?php 

class Categorie{

	var $id;
	var $titre;
	var $contenu;

	function __construct($t, $c){
		$this->titre = $t;
		$this->contenu = $c;
	}

	function setId($n){
		$this->id = $n;
	}

	function getId(){
		return $this->id;
	}

	function setTitre($n){
		$this->titre = $n;
	}

	function getTitre(){
		return $this->titre;
	}

	function setContenu($a){
		$this->contenu = $a;
	}

	function getContenu(){
		return $this->contenu;
	}
}

?>