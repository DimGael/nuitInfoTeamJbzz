
	<?php
		if(estConnecte()){
			echo "<center><h1>Erreur !</h1>";
			echo "<p>Vous êtes déjà connecté ! </p></center>";
			header("Refresh:2,url='./index.php?page=0'");
			exit();
		}
		else {
	?>
	<center><h1>Se connecter</h1>

<form method="post" action="index.php?page=4">
  <div class="form-group">
    Login : <input type="text" name="login" id="loginConnnexion" required="true" autofocus="true" placeholder="Pseudo">
  </div>
  <div class="form-group">
    Mot de passe : <input type="password" name="mdp" id="mdpPassword" required="true" placeholder="Mot de passe">
  </div>

  <button type="submit" class="btn btn-default">Envoyer</button>
</form></center>

<?php } ?>
