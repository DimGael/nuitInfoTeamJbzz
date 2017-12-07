<h1>Se connecter</h1>

<form method="post" action="index.php?page=4">

	<input type="text" name="login" id="loginConnnexion" required="true" autofocus="true" placeholder="Pseudo"><br> <br>
	<input type="password" name="mdp" id="mdpPassword" required="true" placeholder="Mot de passe"><br> <br>

	<?php
		if(isset($_GET['connexion'])){
			echo "<em>Erreur, login ou mot de passe incorrect</em>";

			echo "<br> <br>";
		}
	?>

	<input type="submit" value="Connexion">
</form>