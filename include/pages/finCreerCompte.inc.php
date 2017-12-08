<?php
$pdo = new Mypdo();


$compteManager = new CompteManager($pdo);
$login = $_POST['pseudo'];
$compteMemeLogin = $compteManager->getComptePseudo($login);
$compteMemeEMail = $compteManager->getCompteMail(htmlspecialchars($_POST['mail']));

if(empty($compteMemeLogin) && empty($compteMemeEMail)){
	$compteManager->add(new Compte(array(
		'uti_nom' => htmlspecialchars($_POST['nom']),
		'uti_prenom' => htmlspecialchars($_POST['prenom']),
		'uti_pseudo' => htmlspecialchars($_POST['pseudo']),
		'uti_mdp' => hashMdp(htmlspecialchars($_POST['pwd'])),
		'uti_email' => htmlspecialchars($_POST['mail'])
	)));
	$infos = $compteManager->getComptePseudo($login);
	$_SESSION['connexion'] = $infos;

	echo "<center><h1> Compte créé. Redirection automatique ! </h1></center>";
	header("Refresh:2;index.php?page=0");
}
else {
	echo "<center><h1> Une erreur est survenue ! </h1></center>";
	header("Refresh:0,url='./index.php?page=0'");
}

?>
