<?php

class CompteManager{
	private $db;

	public function __construct($db){
			$this->db = $db;
	}

	public function add($compte){
			var_dump($compte);
			$sql = "INSERT INTO utilisateur (uti_nom, uti_prenom, uti_pseudo, uti_mdp)
					VALUES(:nom, :prenom, :pseudo, :mdp)";
			$req = $this->db->prepare($sql);

			return $req->execute(array(
				'nom' => $personne->getNom(),
				'prenom' => $personne->getPrenom(),
				'pseudo' => $personne->getPseudo(),
				'mdp' => $personne->getMdp()
			));
		}




}




 ?>