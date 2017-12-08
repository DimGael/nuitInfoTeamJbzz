<?php

class SignalementManager{
	private $db;

	public function __construct($db){
			$this->db = $db;
	}

	public function getAllSignalement(){
		$listeSignalement = array();

		$sql = "SELECT sig_id, sig_lib, sig_date, typ_id, uti_id FROM SIGNALEMENT";

		   $requete = $this->db->prepare($sql);
			$requete->execute();

			while ($signalement = $requete->fetch(PDO::FETCH_OBJ)){
				$listeSignalement[] = new Signalement($signalement);
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
			FROM typesignal t, signalement s
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

	public function getNbSignalements(){
		$sql = "SELECT * FROM signalement";

		$requete = $this->db->prepare($sql);
		$requete->execute();

		$requete->closeCursor();

		$nbligne = $requete->rowCount();

		return $nbligne;
	}

	public function rechercher($txt){
		$listeSignalement = array();

		$sql = "SELECT sig_id, sig_lib, sig_date, s.typ_id, s.uti_id
		FROM signalement s, typesignal t, utilisateur u
		WHERE s.typ_id=t.typ_id AND u.uti_id=s.uti_id AND( typ_lib LIKE '%".$txt."%' or sig_lib LIKE '%".$txt."%' or uti_pseudo LIKE '%".$txt."%')";

		$requete = $this->db->prepare($sql);
		$requete->bindValue(':txt', $txt);
		$requete->execute();

		while ($signalement = $requete->fetch(PDO::FETCH_OBJ)){
			$listeSignalement[] = new Signalement($signalement);
		}

		$requete->closeCursor();

		return $listeSignalement;
	}





}





?>
