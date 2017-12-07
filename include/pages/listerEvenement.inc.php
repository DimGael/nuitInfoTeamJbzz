<?php
			$pdo = new Mypdo();
			$evenementManager = new EvenementManager($pdo);
      $compteManager = new CompteManager($pdo);
			$evenements = $evenementManager -> getAllEvenements();
				?>

				<h1>Liste des evenements enregistrés</h1>

				<p>Actuellement <?php echo $evenementManager->getNbEvenements(); ?> evenements sont enregistrés</p>
				<br />
				<table id="listerEvenements">
					<tr><th>Titre</th><th>Organisateur</th><th>Date</th><th>Risque</th><th>Lieu</th></tr>
					<?php
					foreach ($evenements as $eve){?>
            <tr onclick="window.location='index.php?page=11&id=<?php echo $eve->getIdEve(); ?>';">
							<td><?php echo $eve->getTitre();?>
	            </td><td><?php echo $compteManager->getCompteId($eve->getIdUti())->getPseudo();?>
	            </td><td><?php echo $eve->getDate();?>
	            </td><td><?php echo $eve->getRisque();?>
	            </td><td><?php echo $eve->getLieu();?></td>
            </tr>
					<?php } ?>
					</table>
					<br />
					<p>Cliquez sur un evenement pour afficher ses details !</p>
