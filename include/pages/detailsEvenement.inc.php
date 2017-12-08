	<?php
		$id = $_GET['id'];
		$db = new Mypdo();
		$evenementmanager = new EvenementManager($db);
		$CompteManager = new CompteManager($db);
		$ParticipeManager = new ParticipeManager($db);

		$infos = $CompteManager->getComptePseudo($_SESSION['connexion']->getPseudo());
	  $idPers = $infos->getId();

		$detailevenement = $evenementmanager->getUnEvenement($id);
		$participe = $ParticipeManager->getParticipe($idPers, $id);

	?>

<center>
	<h1>Détail d'un événement</h1>
	<table class="table">
		<tr>
			<th>Titre</th>
			<th>Description</th>
			<th>Lieu</th>
			<th>Date</th>
			<th>Risque</th>
		</tr>
		<tr>
			<td> <?php echo $detailevenement->getTitre() ?> </td>
			<td> <?php echo $detailevenement->getDescription() ?> </td>
			<td> <?php echo $detailevenement->getLieu() ?> </td>
			<td> <?php echo $detailevenement->getDate() ?> </td>
			<td> <?php echo $detailevenement->getRisque() ?> </td>
		</tr>

	</table>

<table>
<tr>
	<?php if($participe == false){ ?>

			<td><a href="./index.php?page=14&amp;id=<?php echo $id ?>"><center><button type="button" class="bouton bouton1">Participer</button></center></a></td>
	<?php } ?>
	<td><a href="./index.php?page=10&amp;id=<?php echo $id ?>"><center><button type="button" class="bouton bouton1">Messages</button></center></a></td>
	<td><a href="./index.php?page=15&amp;id=<?php echo $id ?>"><center><button type="button" class="bouton bouton1">Participants</button></center></a></td>
</tr>
</table>
</center>
