<?php

class CompteManager{
	private $db;

	public function __construct($db){
			$this->db = $db;
	}

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
		}

	public function getComptePseudo($pseudo){
		$sql = "SELECT uti_id, uti_nom, uti_prenom, uti_pseudo, uti_mdp, uti_email
		FROM utilisateur WHERE uti_pseudo = :pseudo";

		$req = $this->db->prepare($sql);

		$req->bindValue(':pseudo', $pseudo);

		$req->execute();

		while ($valeurCompte = $req->fetch(PDO::FETCH_OBJ)) {
			$compte = new Compte($valeurCompte);

			return $compte;
		}

		return NULL;
	}

	public function getCompteId($id){
		$sql = "SELECT uti_id, uti_nom, uti_prenom, uti_pseudo, uti_mdp, uti_email
		FROM utilisateur WHERE uti_id = :id";

		$req = $this->db->prepare($sql);

		$req->bindValue(':id', $id);

		$req->execute();

		while ($valeurCompte = $req->fetch(PDO::FETCH_OBJ)) {
			$compte = new Compte($valeurCompte);

			return $compte;
		}

		return NULL;
	}

	public function getCompteMail($mail){
		$sql = "SELECT uti_id, uti_nom, uti_prenom, uti_pseudo, uti_mdp, uti_email FROM utilisateur WHERE uti_email = :mail";

		$req = $this->db->prepare($sql);

		$req->bindValue(':mail', $mail);

		$req->execute();

		while ($valeurCompte = $req->fetch(PDO::FETCH_OBJ)) {
			$compte = new Compte($valeurCompte);
			return $compte;
		}

		return NULL;
	}
}


?>
