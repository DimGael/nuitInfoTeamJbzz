<?php

class Messages{

	private $mes_id;
	private $uti_id;
	private $eve_id;
	private $mes_lib;
	private $mes_date;
  private $uti_pseudo;

	public function __construct($valeurs){
		$this->hydrate($valeurs);
	}

	public function hydrate($valeurs){
		foreach ($valeurs as $attribut => $valeur) {
			switch ($attribut) {
				case 'mes_id':
					$this->setMesId($valeur);
					break;

				case 'uti_id':
					$this->setUtiId($valeur);
					break;

				case 'eve_id':
					$this->setEveId($valeur);
					break;

				case 'mes_lib':
					$this->setMesLib($valeur);
					break;

				case 'mes_date':
					$this->setMesDate($valeur);
					break;

        case 'uti_pseudo':
  				$this->setMesDate($valeur);
  				break;
			}
		}
	}

	public function setMesId($val){
		$this->mes_id = $val;
	}

  public function getMesId(){
    return $this->mes_id;
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

	public function setMesLib($val){
		$this->mes_lib = $val;
	}

  public function getMesLib(){
    return $this->mes_lib;
  }

	public function setMesDate($val){
		$this->mes_date = $val;
	}

  public function getMesDate(){
    return $this->mes_date;
  }

  public function setUtiPseudo($val){
		$this->uti_pseudo = $val;
	}

  public function getUtiPseudo(){
    return $this->uti_pseudo;
  }
}
?>
