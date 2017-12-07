<?php

class Compte{

	private $idEve;
	private $idUti;
	private $titre;
  private $description;
	private $date;
	private $risque;
	private $lieu;

	public function __construct($valeurs){
		$this->hydrate($valeurs);
	}

	public function hydrate($valeurs){
		foreach ($valeurs as $attribut => $valeur) {
			switch ($attribut) {
				case 'eve_id':
					$this->setIdEve($valeur);
					break;

				case 'uti_id':
					$this->setIdUti($valeur);
					break;

				case 'eve_titre':
					$this->setTitre($valeur);
					break;

				case 'eve_description':
					$this->setDescription($valeur);
					break;

				case 'eve_lieu':
					$this->setLieu($valeur);
					break;

				case 'eve_date':
					$this->setDate($valeur);
					break;

        case 'eve_risque':
  				$this->setRisque($valeur);
  				break;
			}
		}
	}

  //id Evenement
	public function getIdEve(){
		return $this->idEve;
	}

	public function setNom($idEve){
		$this->idEve = $idEve;
	}


	//id Utilisateur
	public function getIdUti(){
		return $this->idUti;
	}

	public function setIdUti($idUti){
		$this->idUti = $idUti;
	}


	//titre
	public function getTitre(){
		return $this->titre;
	}

	public function setTitre($titre){
		$this->titre = $titre;
	}

	//description
	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	//date
	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
	}

	//risque
	public function getRisque()){
		return $this->risque;
	}

	public function setRisque($risque){
		$this->risque = $risque;
	}

  //lieu
	public function getLieu()){
		return $this->lieu;
	}

	public function setLieu($lieu){
		$this->lieu = $lieu;
	}


}




?>
