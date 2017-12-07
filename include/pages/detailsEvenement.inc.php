	<?php
		$id = $_GET['id'];
		$db = new Mypdo();
		$evenementmanager = new EvenementManager($db);
		$detailevenement = $evenementmanager->getUnEvenement($id);



	?>


	<h1>Détail d'un événement</h1>
	<table>
		<tr>
			<th>Titre</th>
			<th>Description</th>
			<th>Lieu</th>
			<th>Date</th>
			<th>Risque</th>
		</tr>

		<?php
			foreach ($detailevenement as $evenement) {
		?>
				<tr>
					<td> <?php echo $evenement->getTitre() ?> </td>
					<td> <?php echo $evenement->getDescription() ?> </td>
					<td> <?php echo $evenement->getLieu() ?> </td>
					<td> <?php echo $evenement->getDate() ?> </td>
					<td> <?php echo $evenement->getRisque() ?> </td>
				</tr>
		<?php
			}
		?>
	</table>