<?php
    $idEve = $_GET['id'];
			$pdo = new Mypdo();
      $CompteManager = new CompteManager($pdo);
      $ParticipeManager = new ParticipeManager($pdo);
      $EvenementManager = new EvenementManager($pdo);
      $libEvenement = $EvenementManager->getUnEvenement($_GET['id'])->getTitre();
      $participants = $ParticipeManager->getAllParticipants($idEve);
				?>

				<h1>Liste des participants</h1>

				<table id="listerEvenements">
					<tr><th>Utilisateur</th><th>Evènement</th>
					<?php
					foreach ($participants as $participant){?>
	            <tr><td><?php echo $participant->getPseudo();?>
	            </td><td><?php echo $libEvenement;?>
              </td></tr>
					<?php } ?>
					</table>
					<br />
