<?php
		$pdo=new Mypdo();
    $SignalementManager = new SignalementManager($pdo);
    $signalements = $SignalementManager->getAllSignalements();

		?>
    <center><h1>Liste des evenements enregistrés</h1></center>

		<p>Actuellement <?php echo $signalements->getNbSignalements(); ?> signalements sont enregistrés</p>
				<br />

				<form method="post" action="index.php?page=7">
					<input type="text" id="texteRecherche" name="texteRecherche" placeholder="maRecherche" value="<?=$txt?>">
					<input type="submit" id="boutonRecherche" name="boutonRecherche" value="Rechercher">
				</form>

				<br />
				<table class="table">

					<tr><th>Titre</th><th>Organisateur</th><th>Date</th><th>Risque</th><th>Lieu</th></tr>
					<?php
					foreach ($evenements as $eve){?>
            <tr>
							<td><a href='index.php?page=11&id=<?php echo $eve->getIdEve(); ?>'><?php echo $eve->getTitre();?></a>
	            </td><td><?php echo $compteManager->getCompteId($eve->getIdUti())->getPseudo();?>
	            </td><td><?php echo $eve->getDate();?>
	            </td><td><?php echo $eve->getRisque();?>
	            </td><td><?php echo $eve->getLieu();?></td>
            </tr>
					<?php } ?>
					</table>
					<br />
?>

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
