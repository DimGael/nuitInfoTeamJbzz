<?php
$pdo = new Mypdo();

$mdp = htmlspecialchars($_POST['pwd']);
$sel = "S3rD0cH3_L3_S3L";
$mdp = $sel.$mdp;
$mdp = hash('sha256', $mdp);

$comptemanager = new CompteManager($pdo);
$resultat = $comptemanager->getComptePseudo(htmlspecialchars($_POST['pseudo']));
$resultat2 = $comptemanager->getCompteMail(htmlspecialchars($_POST['mail']));
if(empty($resultat) && empty($resultat2)){
	$comptemanager->add(new Compte(array(
		'uti_nom' => htmlspecialchars($_POST['nom']),
		'uti_prenom' => htmlspecialchars($_POST['prenom']),
		'uti_pseudo' => htmlspecialchars($_POST['pseudo']),
		'uti_mdp' => $mdp,
		'uti_email' => htmlspecialchars($_POST['mail'])
	)));

	echo "<h1> Compte créé ! </h1>";
}
else {
	echo "<h1> Une erreur est survenue ! </h1>";
	echo "<p> Vous allez être redirigé dans 2 secondes ! </p>";
	header("Refresh:2,url='./index.php?page=0'");
}

?>
