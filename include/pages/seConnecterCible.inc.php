<?php

	$pdo = new Mydpo();
	$compteManager = new CompteManager($pdo);
	//$_POST['login']
	//$_POST['mdp']

	//Connexion

	//On vérifie si le login existe dans la bdd
	if(!$compteManager->existeDejaPseudo($_POST['login'])){
		erreurConnexion();
	}

	$compteConnexion = $compteManager->getComptePseudo();

	if($compteConnexion->getMdp() !== $_POST['mdp']){
		erreurConnexion();
	}
	?>

	<h1>Connecté</h1>
	<p>
		Vous avez été connecté. <br> <br>Redirection en cours ...
	</p>

	<?php
	Header("Refresh:2;index.php?page=0");
	exit();

	function erreurConnexion(){
		Header("Refresh:1;index.php?page=3&connexion=1");
		exit();
	}
?>