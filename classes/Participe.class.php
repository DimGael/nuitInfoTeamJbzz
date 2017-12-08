<?php

class Participe{

	private $uti_id;
  private $uti_pseudo;
	private $eve_id;
  private $eve_titre;

	public function __construct($valeurs){
		$this->hydrate($valeurs);
	}

	public function hydrate($valeurs){
		foreach ($valeurs as $attribut => $valeur) {
			switch ($attribut) {

				case 'uti_id':
					$this->setUtiId($valeur);
					break;

				case 'eve_id':
					$this->setEveId($valeur);
					break;

        case 'eve_titre':
    			$this->setEveNom($valeur);
    			break;

        case 'uti_pseudo':
  				$this->setUtiPseudo($valeur);
  				break;
			}
		}
	}

	public function setUtiId($val){
		$this->uti_id = $val;
	}

  public function getUtiId(){
    return $this->uti_id;
  }

	public function setEveId($val){
		$this->eve_id = $val;
	}

  public function getEveId(){
    return $this->eve_id;
  }

  public function setEveNom($val){
		$this->$eve_titre = $val;
	}

  public function getEveNom(){
    return $this->$eve_titre;
  }

  public function setUtiPseudo($val){
		$this->uti_pseudo = $val;
	}

  public function getUtiPseudo(){
    return $this->uti_pseudo;
  }
}
?>
