<?php
$pdo = new Mypdo();


$comptemanager = new CompteManager($pdo);

$compteMemeLogin = $comptemanager->getComptePseudo(htmlspecialchars($_POST['pseudo']));
$compteMemeEMail = $comptemanager->getCompteMail(htmlspecialchars($_POST['mail']));

if(empty($compteMemeLogin) && empty($compteMemeEMail)){
	$comptemanager->add(new Compte(array(
		'uti_nom' => htmlspecialchars($_POST['nom']),
		'uti_prenom' => htmlspecialchars($_POST['prenom']),
		'uti_pseudo' => htmlspecialchars($_POST['pseudo']),
		'uti_mdp' => hashMdp(htmlspecialchars($_POST['pwd'])),
		'uti_email' => htmlspecialchars($_POST['mail'])
	)));

	echo "<h1> Compte créé ! </h1>";
}
else {
	echo "<center><h1> Une erreur est survenue ! </h1>";
	echo "<p> Vous allez être redirigé dans 2 secondes ! </p></center>";
	header("Refresh:2,url='./index.php?page=0'");
}

?>
