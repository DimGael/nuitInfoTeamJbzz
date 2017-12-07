<?php

	//$_POST['login']
	//$_POST['mdp']

	//Cas réussite de la connexion
	if(true){
		?>

		<h1>Connecté</h1>
		<p>
			Vous avez été connecté. <br> <br>Redirection en cours ...
		</p>

		<?php
		header("Refresh:2; index.php?page=0");
		exit();
	}
	else{
		header("Location=index.php?page=4&connexion=1");
		exit();
	}
?>