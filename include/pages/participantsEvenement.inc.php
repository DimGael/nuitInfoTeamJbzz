<?php
    $idEve = $_GET['id'];
			$pdo = new Mypdo();
      $CompteManager = new CompteManager($pdo);
      $ParticipeManager = new ParticipeManager($pdo);
      $participants = $ParticipeManager->getAllParticipants($idEve);
				?>

				<h1>Liste des participants</h1>

				<table id="listerEvenements">
					<tr><th>Utilisateur</th><th>Evènement</th>
					<?php
					foreach ($participants as $participant){?>
	            <tr><td><?php echo $participant->getUtiPseudo();?>
	            </td><td><?php echo $participant->getEveNom();?>
              </td></tr>
					<?php } ?>
					</table>
					<br />
