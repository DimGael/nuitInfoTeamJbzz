<center><h1> Creer un compte </h1>

<form method="post" action="index.php?page=2">
  <div class="form-group">
    Nom : <input type="texte" name="nom" placeholder="Dupont" required="true" autofocus ="true" maxlenght="30">
  </div>
  <div class="form-group">
    Prénom : <input type="texte" name="prenom" placeholder="Jean" required="true" maxlenght="30">
  </div>
  <div class="form-group">
    	Pseudo : <input type="texte" name="pseudo" placeholder="jean123" required="true" maxlenght="30">
  </div>
  <div class="form-group">
    Email : <input type="email" name="mail" id="mail" placeholder="jeandupont@mail.fr" required="true" maxlenght="30">
  </div>
	<div class="form-group">
    Mot de passe : <input type="password" name="pwd" id="pwd" placeholder="********"  required="true" maxlenght="30">
  </div>


  <button type="submit" class="btn btn-default">Envoyer</button>
</form></center>
