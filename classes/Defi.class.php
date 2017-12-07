<?php

class Defi{
	private $idDefi;
	private $libDefi;


	public function __construct($valeurs){
		$this->hydrate($valeurs);
	}

	public function hydrate($valeurs){
		foreach ($valeurs as $attribut => $valeur) {
			switch ($attribut) {
				case 'def_id':
					$this->setIdDefi($valeur);
					break;

				case 'def_lib':
					$this->setLibDefi($valeur);
					break;

			}
		}
	}


	//nom
	public function getIdDefi(){
		return $this->idDefi;
	}

	public function setIdDefi($id){
		$this->idDefi = $id;
	}


	//prenom
	public function getLibDefi(){
		return $this->libDefi;
	}

	public function setLibDefi($lib){
		$this->libDefi = $lib;
	}
}
?>
