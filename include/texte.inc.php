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

<<<<<<< HEAD
case 5 : include_once('pages/jeu.inc.php');
break;
=======
>>>>>>> a25d13d864eff2a3f6f5ebe47be3300e4b708f3e

default : 	include_once('pages/accueil.inc.php');

}
?>
</div>
