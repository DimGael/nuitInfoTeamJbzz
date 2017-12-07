<?php

class MessagesManager{
	private $db;

	public function __construct($db){
			$this->db = $db;
	}

/*
	public function add($compte){
			$sql = "INSERT INTO utilisateur (uti_nom, uti_prenom, uti_pseudo, uti_mdp, uti_email)
					VALUES(:nom, :prenom, :pseudo, :mdp, :email)";
			$req = $this->db->prepare($sql);

			return $req->execute(array(
				'nom' => $compte->getNom(),
				'prenom' => $compte->getPrenom(),
				'pseudo' => $compte->getPseudo(),
				'mdp' => $compte->getMdp(),
				'email' => $compte->getEmail()
			));
		}*/

	public function getAllMessages($id){
    $message = array();

		$sql = "SELECT uti_pseudo, mes_id, u.uti_id, eve_id, mes_lib, mes_date FROM message m
            JOIN utilisateur u on m.uti_id=u.uti_id
            WHERE eve_id = :idEve";

		$req = $this->db->prepare($sql);

		$req->bindParam(':idEve', $id, PDO::PARAM_STR);

		$req->execute();

		while ($libMessage = $req->fetch(PDO::FETCH_OBJ)) {
			$message = new Messages($libMessage);
		}

    $req->closeCursor();

		return $message;
	}
}


?>
