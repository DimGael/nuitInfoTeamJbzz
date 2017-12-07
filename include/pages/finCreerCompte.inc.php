<?php
$pdo = new Mypdo();


$comptemanager = new CompteManager($pdo);

$comptemanager->add(new Vote(array(
	'uti_nom' => $_POST['nom'],
	'uti_prenom' => $_POST['prenom'],
	'uti_pseudo' => $_POST['pseudo'],
	'uti_mdp' => $_POST['mdp'],
	'uti_email' => $_POST['email']
)));
?>


<h1> Compte créé ! </h1>

