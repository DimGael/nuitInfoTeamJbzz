<?php

class ParticipeManager{
	private $db;

	public function __construct($db){
			$this->db = $db;
	}


  public function add($id, $idEve){
          $requete = $this->db->prepare(
            'INSERT INTO participe (uti_id, eve_id) VALUES (:idPers, :eveId)');

            $requete->bindValue(':eveId', $idEve);
            $requete->bindValue(':idPers', $id);

            $retour=$requete->execute();

            return $retour;
  }

	public function getAllParticipants($id){
    $participant = array();

		$sql = "SELECT uti_pseudo, eve_titre FROM participe p
            JOIN evenement e on p.uti_id=e.uti_id
            JOIN utilisateur u on e.uti_id=u.uti_id
            WHERE e.eve_id = :idEve";

		$req = $this->db->prepare($sql);

		$req->bindParam(':idEve', $id);

		$req->execute();

		while ($allParticipant = $req->fetch(PDO::FETCH_OBJ)) {
			$participant[] = new Participe($allParticipant);
		}

    $req->closeCursor();

		return $participant;
	}
}


?>
