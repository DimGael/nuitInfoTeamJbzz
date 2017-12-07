<?php 

	
	if(!estConnecte()){
		?>
		<h1>Erreur !</h1>
		<p>Vous êtes déjà connecté ! </p>		
		<?php
		header("Refresh:2,url='./index.php?page=0'");
		exit();
	}

	unset($_SESSION['connexion']);
?>
<h1>Déconnexion</h1>
<p>
	Vous avez bien été déconnecté !<br>
	Redirection en cours ...
</p>
<?php
	header("Refresh:2,url='./index.php?page=0'");
	exit();
?>