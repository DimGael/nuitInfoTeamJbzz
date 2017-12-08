<div id="texte">
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
	else
	{$page=0;
	}
switch ($page) {
//
// Personnes
//

case 0:
	// inclure ici la page accueil photo
	include_once('pages/accueil.inc.php');
	break;

case 1 : include_once('pages/creerCompte.inc.php');
break;

case 2 : include_once('pages/finCreerCompte.inc.php');
break;

case 3 : include_once('pages/seConnecter.inc.php');
break;

case 4 : include_once('pages/seConnecterCible.inc.php');
break;

case 5 : include_once('pages/jeu.inc.php');
break;

case 6 : include_once('pages/creerEvenement.inc.php');
break;

case 7 : include_once('pages/listerEvenement.inc.php');
break;

case 8 : include_once('pages/detailsEvenement.inc.php');
break;

case 9 : include_once('pages/seDeconnecter.inc.php');
break;

case 10 : include_once('pages/listerMessages.inc.php');
break;

case 11 : include_once('pages/detailsEvenement.inc.php');
break;

case 12 : include_once('pages/seDeconnecter.inc.php');
break;

case 13 : include_once('pages/creerEvenementCible.inc.php');
break;

case 14 : include_once('pages/participeEvenement.inc.php');
break;

case 15 : include_once('pages/participantsEvenement.inc.php');
break;

case 16 : include_once('pages/gestesQuiSauvent.inc.php');
break;

case 17 : include_once('pages/numerosAConnaitre.inc.php');
break;

case 18 : include_once('pages/risques.inc.php');
break;

case 19 : include_once('pages/listerSignalement.inc.php');
break;

case 20 : include_once('pages/ajouterSignalement.inc.php');
break;

case 404 : include_once('pages/error404.inc.php');
break;

default : 	include_once('pages/accueil.inc.php');

}
?>
</div>
