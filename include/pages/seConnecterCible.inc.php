<?php

	//$_POST['login']
	//$_POST['mdp']

	//Cas réussite de la connexion
	if(false){
		?>

		<h1>Connecté</h1>
		<p>
			Vous avez été connecté. <br> <br>Redirection en cours ...
		</p>

		<?php
		Header("Refresh:2;index.php?page=0");
		exit();
	}
	else{
		Header("Location:index.php?page=4&connexion=1");
		exit();
	}
?>