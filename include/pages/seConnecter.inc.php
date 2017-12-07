
	<?php
		if(estConnecte()){
			echo "<h1>Erreur !</h1>";
			echo "<p>Vous êtes déjà connecté ! </p>";
			header("Refresh:2,url='./index.php?page=0'");
			exit();
		}
		else {
	?>
	<h1>Se connecter</h1>

<form method="post" action="index.php?page=4">

	<input type="text" name="login" id="loginConnnexion" required="true" autofocus="true" placeholder="Pseudo"><br> <br>
	<input type="password" name="mdp" id="mdpPassword" required="true" placeholder="Mot de passe"><br> <br>


	<input type="submit" value="Connexion">
</form>
<?php } ?>
