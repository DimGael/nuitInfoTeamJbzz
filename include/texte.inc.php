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
default : 	include_once('pages/accueil.inc.php');
}

case 1 : include_once('pages/creerCompte.inc.php');
break;

case 2 : include_once('pages/finCreerCompte.inc.php');
break;

?>
</div>
