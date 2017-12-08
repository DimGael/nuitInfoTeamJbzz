<?php

class SignalementManager{
	private $db;

	public function __construct($db){
			$this->db = $db;
	}

	public function getAllSignalement(){
		$listeSignalement = array();

		$sql = "SELECT sig_lib, sig_date, typ_id, uti_id FROM SIGNALEMENT";

		   $requete = $this->db->prepare($sql);
			$requete->execute();

			while ($signalement = $requete->fetch(PDO::FETCH_OBJ)){
				$listeSignalement[] = new Evenement($signalement);
			}

			$requete->closeCursor();

			return $listeSignalement;;
	}

	public function add($signalement){
		var_dump($signalement);
			$sql = "INSERT INTO signalement(sig_lib, sig_date, typ_id, uti_id)
      VALUES (:libelle, :sig_date, :typeId, :utiId)";
			$req = $this->db->prepare($sql);

			return $req->execute(array(
				'libelle' => $signalement->getLibelle(),
				'sig_date' => $signalement->getDate(),
				'typeId' => $signalement->getType(),
				'utiId' => $signalement->getUti(),
			));
	}





}





?>
