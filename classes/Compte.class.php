<?php

class Compte{
	private $nom;
	private $prenom;
	private $pseudo;
	private $mdp;
	private $email;


	public function __construct($valeurs){
		$this->hydrate($valeurs);
	}

	public function hydrate($valeurs){
		foreach ($valeurs as $attribut => $valeur) {
			switch ($attribut) {
				case 'uti_nom':
					$this->setNom($valeur);
					break;

				case 'uti_prenom':
					$this->setPrenom($valeur);
					break;

				case 'uti_pseudo':
					$this->setPseudo($valeur);
					break;

				case 'uti_mdp':
					$this->setMdp($valeur);
					break;
				case 'uti_email':
					$this->setEmail($valeur);
					break;
			}
		}
	}


	//nom
	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}


	//prenom
	public function getPrenom(){
		return $this->prenom;
	}

	public function setPrenom($prenom){
		$this->prenom = $prenom;
	}


	//pseudo
	public function getPseudo(){
		return $this->pseudo;
	}

	public function setPseudo($pseudo){
		$this->pseudo = $pseudo;
	}

	//mdp
	public function getMdp(){
		return $this->mdp;
	}

	public function setMdp($mdp){
		$this->mdp = $mdp;
	}

	//email
	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}


}




?>