<?php

class EvenementManager{ 
	private $db;

	public function __construct($db){
			$this->db = $db;
	}

	public function add($evenement){
			$sql = "INSERT INTO evenement(uti_id,eve_titre,eve_description,eve_risque,eve_lieu,eve_date)
      VALUES (:idUti, :titre, :description, :risque, :lieu, :dateEve)";
			$req = $this->db->prepare($sql);

			return $req->execute(array(
				'idUti' => $evenement->getIdUti(),
				'titre' => $evenement->getTitre(),
				'description' => $evenement->getDescription(),
				'risque' => $evenement->getRisque(),
        'lieu' => $evenement->getLieu(),
        'dateEve' => $evenement->getDate()
			));
		}

    public function getAllEvenements(){
      $listeEvenement = array();

      $sql = "SELECT eve_id, uti_id, eve_titre, eve_description, eve_lieu, eve_date, eve_risque
      FROM evenement";

      $requete = $this->db->prepare($sql);
			$requete->execute();

			while ($evenement = $requete->fetch(PDO::FETCH_OBJ)){
				$listeEvenement[] = new Evenement($evenement);
			}

			$requete->closeCursor();

			return $listeEvenement;
    }

    public function getUnEvenement($idEve){
      $sql = "SELECT eve_id, uti_id, eve_titre, eve_description, eve_lieu, eve_date, eve_risque
      FROM evenement WHERE eve_id=".$idEve;

      $requete = $this->db->prepare($sql);
			$requete->execute();

			while ($evenement = $requete->fetch(PDO::FETCH_OBJ)){
				$listeEvenement = new Evenement($evenement);
			}

			$requete->closeCursor();

			return $listeEvenement;
    }

    public function getNbEvenements(){
      $sql = "SELECT * FROM evenement";

      $requete = $this->db->prepare($sql);
      $requete->execute();

      $requete->closeCursor();

      $nbligne = $requete->rowCount();

      return $nbligne;
    }

		public function rechercher($txt){
			$listeEvenement = array();

      $sql = "SELECT eve_id, e.uti_id, eve_titre, eve_description, eve_lieu, eve_date, eve_risque
			FROM evenement e, utilisateur u
			WHERE e.uti_id=u.uti_id AND( eve_titre LIKE '%".$txt."%' or eve_description LIKE '%".$txt."%' or uti_pseudo LIKE '%".$txt."%')";

      $requete = $this->db->prepare($sql);
			$requete->bindValue(':txt', $txt);
			$requete->execute();

			while ($evenement = $requete->fetch(PDO::FETCH_OBJ)){
				$listeEvenement[] = new Evenement($evenement);
			}

			$requete->closeCursor();

			return $listeEvenement;
    }


}




 ?>
