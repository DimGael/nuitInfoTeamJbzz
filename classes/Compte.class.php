<?php

class Compte{
	private $nom;
	private $prenom;
	private $pseudo;
	private $mdp;


	public function __construct($valeurs){
		$this->hydrate($valeurs);
	}

	public function hydrate($valeurs){
		foreach ($valeurs as $attribut => $valeur) {
			switch ($attribut) {
				case 'uti_nom':
					$this->setNumero($valeur);
					break;

				case 'uti_prenom':
					$this->setNom($valeur);
					break;

				case 'uti_pseudo':
					$this->setPrenom($valeur);
					break;

				case 'uti_mdp':
					$this->setTelephone($valeur);
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
	public function getPreom(){
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



}




?>