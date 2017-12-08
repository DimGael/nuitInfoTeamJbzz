<?php

class ParticipeManager{
	private $db;

	public function __construct($db){
			$this->db = $db;
	}


  public function add($id, $idEve){
			$req = $this->db->prepare("SELECT uti_id FROM participe WHERE uti_id=$id AND eve_id=$idEve");
			$req->bindValue(':eveId', $idEve);
			$req->bindValue(':idPers', $id);

			$req->execute();

			$retour1 = $req->fetch();
			if(empty($retour1)){
          $requete = $this->db->prepare(
            'INSERT INTO participe (uti_id, eve_id) VALUES (:idPers, :eveId)');

            $requete->bindValue(':eveId', $idEve);
            $requete->bindValue(':idPers', $id);

            $retour = $requete->execute();

            return $retour;
					}
  }

	public function getAllParticipants($id){
		$pdo = new Mypdo();
		$CompteManager = new CompteManager($pdo);
    $participant = array();

		$sql = "SELECT uti_id FROM participe p
            WHERE eve_id = :idEve";

		$req = $this->db->prepare($sql);

		$req->bindValue(':idEve', $id);

		$req->execute();

		while ($allParticipantId = $req->fetch(PDO::FETCH_OBJ)) {
			$idUtilisateur = $allParticipantId->uti_id;
			$participant[] = $CompteManager->getCompteId($idUtilisateur);
		}

    $req->closeCursor();

		return $participant;
	}

	public function getParticipe($idPers, $id){
		$sql = "SELECT * FROM participe p
            WHERE eve_id = :idEve AND
						uti_id = :idPers";

		$req = $this->db->prepare($sql);

		$req->bindValue(':idPers', $idPers);
		$req->bindValue(':idEve', $id);

		$req->execute();

		$nbLignes = $req->rowCount();

    $req->closeCursor();

		if($nbLignes == 0){
			return false;
		}else{
			return true;
		}
	}
}


?>
