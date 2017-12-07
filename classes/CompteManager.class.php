<?php

class CompteManager{
	private $db;

	public function __construct($db){
			$this->db = $db;
	}

	public function add($compte){
			var_dump($compte);
			$sql = "INSERT INTO utilisateur (uti_nom, uti_prenom, uti_pseudo, uti_mdp, uti_email)
					VALUES(:nom, :prenom, :pseudo, :mdp, :email)";
			$req = $this->db->prepare($sql);

			return $req->execute(array(
				'nom' => $compte->getNom(),
				'prenom' => $compte->getPrenom(),
				'pseudo' => $compte->getPseudo(),
				'mdp' => $compte->getMdp()
				'email' => $compte->getEmail();
			));
		}

	public function getComptePseudo($pseudo){
		$sql = "SELECT uti_id, uti_nom, uti_prenom, uti_pseudo, uti_mdp, uti_email FROM utilisateur WHERE uti_pseudo = :pseudo";

		$req = $this->db->prepare($sql);

		$req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);

		$req->execute();

		while ($valeurCompte = $req->fetch(PDO::FETCH_OBJ)) {
			$compte = new Compte($valeurCompte);	
		}

		return $compte;
	}


}




 ?>