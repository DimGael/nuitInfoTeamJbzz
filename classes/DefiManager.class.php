<?php

class DefiManager{
	private $db;

	public function __construct($db){
			$this->db = $db;
	}


  public function getSixRandomDefi(){
    $listeDefis = array();
    $rand1 = rand(1,2);
    $rand2 = rand(3,4);

    $sql = 'SELECT def_id, def_lib FROM defis WHERE def_id = :rand1';
    $requete->bindValue(':rand1', $rand1);
    $requete = $this->db->prepare($sql);
    $requete->execute();

    $listeDefis[] = new Defi($requete->fetch(PDO::FETCH_OBJ))

    $sql = 'SELECT def_id, def_lib FROM defis WHERE def_id = :rand2';
    $requete->bindValue(':rand2', $rand2);
    $requete = $this->db->prepare($sql);
    $requete->execute();

    $listeDefis[] = new Defi($requete->fetch(PDO::FETCH_OBJ))

    $sql = 'SELECT def_id, def_lib FROM defis WHERE def_id BETWEEN 5 AND 8';
    $requete->bindValue(':rand1', $rand1);
    $requete = $this->db->prepare($sql);
    $requete->execute();

		while($defi = $requete->fetch(PDO::FETCH_OBJ)){
			$listeDefis[] = new Defi($defi);
		}
    $requete->closeCursor();
    return $listeDefis;
}




 ?>
