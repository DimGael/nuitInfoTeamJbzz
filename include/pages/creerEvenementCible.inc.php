<?php
	if(isset($_POST['description']) && isset($_SESSION['nouvEvenement']) && estConnecte()){
		$pdo = new Mypdo();

		$evenementManager = new EvenementManager($pdo);
		$compteManager = new CompteManager($pdo);

		if(!$evenementManager->add(new Evenement(array(
			'uti_id' => $_SESSION['connexion']->getId(),
			'eve_titre' => $_SESSION['nouvEvenement']['nomEvenement'],
			'eve_description' => $_POST['description'],
			'eve_lieu' => $_SESSION['nouvEvenement']['lieuEvenement'],
			'eve_risque' => 0,
			'eve_date' => $_SESSION['nouvEvenement']['dateEvenement']." ".$_SESSION['nouvEvenement']['heure']
		)))){
			echo "Erreur lors de l'insertion";
		}
		else{
			echo "Réussite de l'insertion !";
		}

	?>
		<h1>L'événement a bien été enregistré :)</h1>
		<p>
			Vous allez être redirigé dans 2 secondes.
		</p>
	<?php

		unset($_SESSION['nouvEvenement']);
		header("Refresh:2, index.php?page=0");
		exit();
	}
?>