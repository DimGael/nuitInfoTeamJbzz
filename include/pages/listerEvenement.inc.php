<?php
			$pdo = new Mypdo();
			$evenementManager = new EvenementManager($pdo);
      $compteManager = new CompteManager($pdo);
			$evenements = $evenementManager -> getAllEvenements();
				?>
<center>
				<h1>Liste des evenements enregistrés</h1>

				<p>Actuellement <?php echo $evenementManager->getNbEvenements(); ?> evenements sont enregistrés</p>
				<br />
				<table class="table">
				<form method="post" action="index.php?page=7">
					<input type="text" id="texteRecherche" name="texteRecherche" placeholder="maRecherche">
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
					<p>Cliquez sur un evenement pour afficher ses details !</p>
</center
