<?php
			$pdo=new Mypdo();
			$evenementManager = new $EvenementManager($pdo);
			$personne = $personneManager -> getAllpersonne();
			$nbPersonne = $personneManager -> getNbPersonne();
				?>

				<h1>Liste des personnes enregistrées</h1>

				<p>Actuellement <?php echo $nbPersonne; ?> personnes sont enregistrées</p>
				<br />
				<table id="listerPersonnes">
					<tr><th>Numéro</th><th>Nom</th><th>Prénom</th>
					<?php
					foreach ($personne as $per){
						$perNum = $per->getPerNum();
						$perNom = $per->getPerNom();?>
						<tr><td><b><a href="index.php?page=14&id=<?php echo $perNum.'&pernom='.$perNom;?>"><?php echo $perNum;?></a></b>
						</td><td> <?php echo $perNom;?>
						</td><td> <?php echo $per -> getPerPrenom();
						if (isset($_SESSION['login']) && $_SESSION['est_admin'] == 1){?>
						</td><td><a href="index.php?page=19&id=<?php echo $per -> getPerNum(); ?>"><img class="modifier" src="image/modifier.png" alt="Modifier la personne !" title="modifIcon"/></a>
						<?php	}	?>
						</td></tr>
					<?php } ?>
					</table>
					<br />
					<p>Cliquez sur le numéro de la personne pour obtenir plus d'informations.</p>
