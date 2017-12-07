<?php

class MessagesManager{
	private $db;

	public function __construct($db){
			$this->db = $db;
	}


  public function add($message, $id, $idEve){
          $requete = $this->db->prepare(
            'INSERT INTO message (uti_id, eve_id, mes_lib, mes_date) VALUES (:idPers, :eveId, :Mess, :dateMes)');

            $requete->bindValue(':eveId', $idEve);
            $requete->bindValue(':idPers', $id);
            $requete->bindValue(':Mess', $message);
            $requete->bindValue(':dateMes', date("Y-m-d H:i:s"));

            $retour=$requete->execute();

            return $retour;
  }

	public function getAllMessages($id){
    $message = array();

		$sql = "SELECT uti_pseudo, mes_id, u.uti_id, eve_id, mes_lib, mes_date FROM message m
            JOIN utilisateur u on m.uti_id=u.uti_id
            WHERE eve_id = :idEve";

		$req = $this->db->prepare($sql);

		$req->bindParam(':idEve', $id);

		$req->execute();

		while ($libMessage = $req->fetch(PDO::FETCH_OBJ)) {
			$message[] = new Messages($libMessage);
		}

    $req->closeCursor();

		return $message;
	}
}


?>
