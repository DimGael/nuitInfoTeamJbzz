<?php

class Signalement{
	private $libelle;
	private $date;
	private $idType;
	private $idUti;

	public function __construct($valeurs){
		$this->hydrate($valeurs);
	}

	public function hydrate($valeurs){
		foreach ($valeurs as $attribut => $valeur) {
			switch ($attribut) {
				case 'sig_lib':
					$this->setLibelle($valeur);
					break;

				case 'sig_date':
					$this->setDate($valeur);
					break;

				case 'typ_id':
					$this->setType($valeur);
					break;

				case 'uti_id':
					$this->setUti($valeur);
					break;

			}
		}
	}

	//libellé
	public function getLibelle(){
		return $this->libelle;
	}

	public function setLibelle($libelle){
		$this->libelle = $libelle;
	}

	//date
	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
	}

	//libellé
	public function getType(){
		return $this->typ_id;
	}

	public function setType($typ_id){
		$this->typ_id = $typ_id;
	}

	//libellé
	public function getUti(){
		return $this->idUti;
	}

	public function setUti($uti){
		$this->idUti = $idUti;
	}



}

 ?>