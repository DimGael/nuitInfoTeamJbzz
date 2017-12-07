<?php

	$pdo = new Mypdo();
	$compteManager = new CompteManager($pdo);
	//Connexion
	$login = htmlspecialchars($_POST['login']);
	$mdp = hashMdp($_POST['mdp']);
	$infos = $compteManager->getComptePseudo($login);
	
	//On vérifie si le login existe dans la bdd
	if(!empty($infos)){
		if($mdp == $infos->getMdp()){
			echo "<h1>Vous êtes connecté !</h1>";
			$_SESSION['connexion'] = $infos;
			header("Refresh:2;index.php?page=0");
			exit();
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
