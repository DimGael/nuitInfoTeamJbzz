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




}




 ?>