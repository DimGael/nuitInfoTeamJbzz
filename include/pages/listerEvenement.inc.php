<?php
			$pdo = new Mypdo();
			$evenementManager = new EvenementManager($pdo);
      $compteManager = new CompteManager($pdo);

			if(isset($_POST['texteRecherche'])){
				$txt = $_POST['texteRecherche'];
				if($txt!=''){
					$evenements = $evenementManager -> rechercher($txt);
				}else{
					$evenements = $evenementManager -> getAllEvenements();
				}

			}else{
				$evenements = $evenementManager -> getAllEvenements();
			}
				?>

				<h1>Liste des evenements enregistrés</h1>

				<p>Actuellement <?php echo $evenementManager->getNbEvenements(); ?> evenements sont enregistrés</p>
				<br />

				<form method="post" action="index.php?page=7">
					<input type="text" id="texteRecherche" name="texteRecherche" placeholder="maRecherche">
					<input type="submit" id="boutonRecherche" name="boutonRecherche" value="Rechercher">
				</form>

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
