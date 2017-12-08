<h1>Créer un événement</h1>

<?php 


if(isset($_POST['nomEvenement']))
	$_SESSION['nouvEvenement'] = array('nomEvenement' => htmlspecialchars($_POST['nomEvenement']));

if(isset($_POST['dateEvenement']))
	$_SESSION['nouvEvenement']['dateEvenement'] = $_POST['dateEvenement'];

if(isset($_POST['nbParticipant']))
	$_SESSION['nouvEvenement']['nbParticipant'] = $_POST['nbParticipant'];

if(isset($_POST['heure']))
	$_SESSION['nouvEvenement']['heure'] = $_POST['heure'].":00";

if(isset($_POST['lieuEvenement']))
	$_SESSION['nouvEvenement']['lieuEvenement'] = $_POST['lieuEvenement'];

if(!isset($_SESSION['nouvEvenement']['nomEvenement'])){
?>

<img src="./img/voitureQuestions/simone.gif" width="300">
<p>
	Yo ! C'est Simone la voiture qui parle. <br>
	Je vais te poser des questions sur l'événement que tu vas créer, il me faut tout d'abord son nom. 
	<br>C'est quoi ton événement ?
</p>
<form method="post" action="index.php?page=6">
	<input type="text" name="nomEvenement" id="nomEvenement" placeholder="Ex : anniversaire d'Alexis mon poto sur" size="50" maxlength="40" required="true" autofocus="true">
	<br><br>
	<input type="Submit" value="Valider">
</form>
<?php
}
//nomEvent est défini

else if(!isset($_SESSION['nouvEvenement']['dateEvenement']) && !isset($_SESSION['nouvEvenement']['heure'])){
?>


<img src="./img/voitureQuestions/simone.gif" width="300">
<p>Ok, maintenant tu peux me dire quand ça se déroule ?</p>
<form method="post" action="index.php?page=6">
	Date : <input type="date" name="dateEvenement" id="dateEvenement" required="true"><br>
	Heure : <input type="time" name="heure" id="heure" required="true">
	<input type="submit" value="valider">
</form>
<?php

}

else if(!isset($_SESSION['nouvEvenement']['lieuEvenement'])){
?>


<img src="./img/voitureQuestions/simone.gif" width="300">
<p>Ouais, je calcule tout ça grâce à mon super processeur <br>
	Tu peux m'écrire l'adresse de l'événement "<?php echo $_SESSION['nouvEvenement']['nomEvenement'] ?>" que je finalise mon superbe calcul ?</p>
<form method="post" action="index.php?page=6">
	Adresse : <input type="text" name="lieuEvenement" required="true"> <br>
	<input type="submit" value="valider">
</form>
<?php

}
//dateEvenement est défini
else if(!isset($_SESSION['nouvEvenement']['nbParticipant'])){
?>
<img src="./img/voitureQuestions/simone.gif" width="300">
<p>Ok, ok je note, .... intéréssant ..., combien de gens participeront ?</p>
<form method="post" action="index.php?page=6">
	Nombre de participants : <input type="number" name="nbParticipant" id="nbParticipant" min="0">
	<input type="submit" value="valider">
</form>
<?php
}
else {
	?>
<img src="./img/voitureQuestions/simone.gif" width="300">
<p>
	Okay très bien, d'après mes calculs ultra sophistiqués 
	<br> et d'après une étude américaine, le taux de risque de ta sortie s'élève à xxx%.
	<br> Je t'invite à choisir un SAM ! (joue au jeu).
	<br><br>
	Si tu veux ajouter une description à ton événement pour l'ajouter sur le site, rempli ce truc et clique sur valider :
	<form method="post" action="index.php?page=13">
		<textarea maxlength="1000" required="true" name="description" style="resize:none;" rows="7" cols="100" required="true">La description que les participants vont lire, respectez-les</textarea> <br>
		<input type="submit" value="Valider">
	</form>
</p>
<?php

	//$_SESSION['nouvEvenement']['dateEvenement']
	//$_SESSION['nouvEvenement']
	//$_SESSION['nouvEvenement']['nomEvenement']
	//$_SESSION['nouvEvenement']['nbParticipant']
	//$_SESSION['nouvEvenement']['heure'] 
	//$_SESSION['nouvEvenement']['lieuEvenement']



}

?>