<?php
		$pdo=new Mypdo();
		$MessagesManager = new MessagesManager($pdo);
    $CompteManager = new CompteManager($pdo);
    $idEve = htmlspecialchars($_GET['id']);

		echo "<center><h1>Forum de l'événement</h1></center>";
		if(!empty($_SESSION['connexion'])){
			?>
			 <br>
		 <center>
			 <form action="./index.php?page=10&id=<?php echo $idEve; ?>" method="post">
				 Message <input type="textarea" id="message" name="message" maxlenght="1000" />
				 <input type="submit" value="Envoyer"/>
			 </form>
		 </center>
			 <?php if(isset($_POST['message'])){
				 $infos = $CompteManager->getComptePseudo($_SESSION['connexion']->getPseudo());
				 $id = $infos->getId();

				 if($MessagesManager->add($_POST['message'], $id, $idEve) == 1){
						?>
						<?php }else{ ?>
						 <p>Erreur !</p>
					 <?php }
					 }
		 }
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
