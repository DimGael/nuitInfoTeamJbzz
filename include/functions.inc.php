<?php

function hashMdp($mdp){
	$sel = "S3rD0cH3_L3_S3L";
	$mdp = $sel.$mdp;
	return hash('sha256', $mdp);
}

function estConnecte(){
	return isset($_SESSION['connexion']);
}

?>