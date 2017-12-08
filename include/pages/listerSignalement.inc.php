<?php
		$pdo=new Mypdo();
    $SignalementManager = new SignalementManager($pdo);
		$CompteManager = new CompteManager($pdo);
    $signalements = $SignalementManager->getAllSignalement();

		?>
    <center><h1>Liste des evenements enregistrés</h1></center>

		<p>Actuellement <?php echo $SignalementManager->getAllSignalement(); ?> signalements sont enregistrés</p>
				<br />

				<form method="post" action="index.php?page=7">
					<input type="text" id="texteRecherche" name="texteRecherche" placeholder="maRecherche" value="<?=$txt?>">
					<input type="submit" id="boutonRecherche" name="boutonRecherche" value="Rechercher">
				</form>

				<br />
				<table class="table">

					<tr><th>Intitulé</th><th>Signaleur</th><th>Date</th><th>Risque</th><th>Lieu</th></tr>
					<?php
					foreach ($signalements as $sig){?>
            <tr>
							<td><?php echo $sig->getLibelle(); ?>
	            </td><td><?php echo $SignalementManager->getType($sig->getSigId());?>
							</td><td><?php echo $CompteManager->getCompteId($sig->getUti())->getPseudo();?>
	            </td><td><?php echo $sig->getDate();?>
	            </td><td><?php echo $sig->getRisque();?>
	            </td><td><?php echo $sig->getLieu();?></td>
            </tr>
					<?php } ?>
					</table>
					<br />

	<br />
	<div class="container">
		<div class="row">
  <?php if($MessagesManager->getNbMessages($idEve) == 0){ ?>
  <center> <p>Soyez le premier à commenter !</p></center>
  <?php }else{ ?>

	<?php
			$messages = $MessagesManager->getAllMessages($idEve);
	foreach($messages as $message){
    ?>
		<div class="col-md-3">
			<?php echo $message->getUtiPseudo();?>

		</div>
		<div class="col-md-6">
							<?php echo $message->getMesLib();?>

		</div>
		<div class="col-md-3">
			<?php echo $message->getMesDate();?>
		</div>
		<br>

	<?php } ?>

<?php }
?>
</div>
</div>
