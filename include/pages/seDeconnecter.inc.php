<div class="container">
	<div class="row">
	<?php
		if(!estConnecte()){
			?>
			<center><h1>Erreur !</h1></center>
			<p>Vous êtes déjà connecté ! </p>
			<?php
			header("Refresh:2,url='./index.php?page=0'");
			exit();
		}

		unset($_SESSION['connexion']);
	?>
	<center><h1>Déconnexion</h1></center>
	<p>
		Vous avez bien été déconnecté !<br>
		Redirection en cours ...
	</p>
	<?php
		//header("Refresh:2,url='./index.php?page=0'");
		exit();
	?>
</div>
</div>
