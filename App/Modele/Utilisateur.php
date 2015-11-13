<?php 

class Utilisateurs{

	private String $nom;
	private String $prenom;
	private String $login;
	private String $mdp;
	private String $email;

	public void __construct(String $n, String $p, Strin $l, String $password, String $e){
		$this->nom = $n;
		$this->prenom = $p;
		$this->login = $l;
		$this->mdp = $password;
		$this->email = $e;
	}

	public boolean addRef(){

	}

	public boolean setCategorie(){

	}

	public boolean	connecte(){

	}

	public boolean deconnecte(){

	}

	public void setNom(){

	}

	public String getNom(){
		return $this->nom;
	}

	public void setPrenom(){

	}

	public String getPrenom(){
		return $this->prenom;
	}

	public void setLogin(){

	}

	public String getLogin(){
		return $this->login;
	}

	public void setMdp(){

	}

	public String getMdp(){
		return $this->mdp;
	}

	public void setEmail(){

	}

	public String getEmail(){
		return $this->email;
	}
}

?>