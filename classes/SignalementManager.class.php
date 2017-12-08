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

	public function getType($idSignalement){
			$sql = "SELECT typ_lib
			FROM type t, signalement s
			WHERE t.typ_id=s.typ_id AND sig_id=:id";

			$req = $this->db->prepare($sql);

			$req->bindValue(':id', $idSignalement);

			$req->execute();

			while ($listeLib = $req->fetch(PDO::FETCH_OBJ)) {
				$lib = $listeLib->typ_lib;

				return $lib;
			}

			return NULL;
	}





}





?>
