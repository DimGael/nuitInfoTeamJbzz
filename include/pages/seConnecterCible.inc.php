<?php

	$pdo = new Mypdo();
	$compteManager = new CompteManager($pdo);
	//Connexion
	$login = htmlspecialchars($_POST['login']);
	$mdp = htmlspecialchars($_POST['mdp']);
	$sel = "S3rD0cH3_L3_S3L";
	$mdp = $sel.$mdp;
	$mdp = hash('sha256', $mdp);
	$infos = $compteManager->getComptePseudo($login);
	//On vérifie si le login existe dans la bdd
	if(!empty($infos)){
		if($mdp == $infos->getMdp()){
			echo "<h1>Vous êtes connecté !</h1>";
		}
		else {
			echo "<h1>Erreur !</h1>";
			echo "<p> Le mot de passe entré est incorrect ! </p>";
			erreurConnexion();
		}
	}
	else{
		echo "<h1>Erreur !</h1>";
		echo "<p> Le pseudo entré est incorrect ! </p>";
		erreurConnexion();
	}

	function erreurConnexion(){
		header("Refresh:2;index.php?page=3&connexion=1");
		exit();
	}
?>
