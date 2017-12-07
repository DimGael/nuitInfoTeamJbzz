<?php
$pdo = new Mypdo();


$comptemanager = new CompteManager($pdo);

$comptemanager->add(new Compte(array(
	'uti_nom' => htmlspecialchars($_POST['nom']),
	'uti_prenom' => htmlspecialchars($_POST['prenom']),
	'uti_pseudo' => htmlspecialchars($_POST['pseudo']),
	'uti_mdp' => htmlspecialchars($_POST['mdp']),
	'uti_email' => htmlspecialchars($_POST['email'])
)));
?>


<h1> Compte créé ! </h1>

