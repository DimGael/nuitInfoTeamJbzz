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
            <tr><td><?php echo $eve->getTitre();?>
            </td><td><?php echo $compteManager->getCompteId($eve->getIdUti())->getPseudo();?>
            </td><td><?php echo $eve->getDate();?>
            </td><td><?php echo $eve->getRisque();?>
            </td><td><?php echo $eve->getLieu();?>
						</td><td><a href="index.php?page=2&id=<?php echo $eve->getIdEve(); ?>"><img class="modifier" src="img/modifier.png" alt="Acceder aux details de l'evenement !" title="modifIcon"/></a></td>

            </tr>
					<?php } ?>
					</table>
					<br />
					<p>Cliquez sur le numéro de la personne pour obtenir plus d'informations.</p>
