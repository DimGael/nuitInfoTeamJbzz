<?php
		$pdo=new Mypdo();
		$MessagesManager = new MessagesManager($pdo);
    $CompteManager = new CompteManager($pdo);
    $idEve = $_GET['id'];
		$messages = $MessagesManager->getAllMessages($idEve);
?>

	<h1>Forum de l'évènement</h1><?php  ?>
	<br />

	<table id="listerMessages">
	<tr><th>Message</th><th>Date</th><th>Par :</th>
	<?php
	foreach($messages as $message){
    ?>

	   <tr><td><?php echo $message->getMesLib();?>
		 </td><td><?php echo $message->getMesDate();?>
     </td><td><?php echo $message->getUtiPseudo();?>
		 </td></tr>
	<?php } ?>
	</table>
	<br />

<?php if(!empty($_SESSION['connexion'])){ ?>

  <form action="index.php?page=10&id=<?php echo $idEve; ?>" method="post">
    <input type="textarea" id="message" name="message" />
    <input type="submit" value="Envoyer"/>
  </form>

  <?php if(isset($_POST['message'])){
    $infos = $CompteManager->getComptePseudo($_SESSION['connexion']->getPseudo());
    $id = $infos->getId();

    if($MessagesManager->add($_POST['message'], $id, $idEve) == 1){ ?>
      <p>Insertion réussie !</p>
      <?php header("refresh:0; url=index.php?page=10&id=$idEve");?>
    <?php }else{ ?>
      <p>Erreur !</p>
    <?php }
  }
}
  ?>
