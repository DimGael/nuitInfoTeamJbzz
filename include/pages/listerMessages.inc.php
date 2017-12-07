<?php
		$pdo=new Mypdo();
		$MessagesManager = new MessagesManager($pdo);
		$messages = $MessagesManager->getAllMessages($_GET['id']);

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
