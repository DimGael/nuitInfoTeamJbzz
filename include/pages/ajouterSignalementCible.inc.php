<?php
$pdo = new Mypdo();


$signalementManager = new SignalementManager($pdo);
$id = $_SESSION['connexion']->getId();


if(!empty($id)){
	$signalementManager->add(new Signalement(array(
		'sig_lib' => htmlspecialchars($_POST['lib']),
		'sig_date' => htmlspecialchars($_POST['date']),
		'typ_id' => htmlspecialchars($_POST['type']),
		'uti_id' => $id
	)));

	echo "<h1> Evenement ajouté, redirection automatique !  </h1>";
	header("Refresh:2;index.php?page=0");
}
else {
	echo "<center><h1>Vous devez être connecté pour publier un signalement </h1>";
	echo "</center>";
	header("Refresh:0,url='./index.php?page=0'");
}

?>