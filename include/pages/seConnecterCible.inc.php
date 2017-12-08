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
			echo "<center><h1>Vous êtes connecté !</h1></center>";
			$_SESSION['connexion'] = $infos;
			session_start();
			header("Refresh:0;index.php?page=0");
			exit();
		}
		else {
			echo "<center><h1>Erreur !</h1>";
			echo "<p> Le mot de passe entré est incorrect ! </p></center>";
			erreurConnexion();
		}
	}
	else{
		echo "<center><h1>Erreur !</h1>";
		echo "<p> Le pseudo entré est incorrect ! </p></center>";
		erreurConnexion();
	}

	function erreurConnexion(){
		header("Refresh:2;index.php?page=3&connexion=1");
		exit();
	}
?>
