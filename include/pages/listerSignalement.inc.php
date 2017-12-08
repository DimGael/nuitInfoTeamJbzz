<?php
		$pdo=new Mypdo();
    $SignalementManager = new SignalementManager($pdo);
		$CompteManager = new CompteManager($pdo);


		if(isset($_POST['texteRecherche'])){
			$txt = $_POST['texteRecherche'];
			if($txt!=''){
				$signalements = $SignalementManager -> rechercher($txt);
			}else{
				$signalements = $SignalementManager->getAllSignalement();
			}

		}else{
			$txt='';
			$signalements = $SignalementManager->getAllSignalement();
		}
		?>
    <center><h1>Liste des evenements enregistrés</h1>

		<p>Actuellement <?php echo $SignalementManager->getNbSignalements(); ?> signalements sont enregistrés</p>
				<br />

				<form method="post" action="index.php?page=19">
					<input type="text" id="texteRecherche" name="texteRecherche" placeholder="maRecherche" value="<?=$txt?>">
					<br><br>
					<button type="submit" class="btn btn-default">Rechercher</button>
				</form>

				<br />
				<table class="table">

					<tr><th>Intitulé</th><th>Type de signalement</th><th>Signaleur</th><th>Date</th></tr>
					<?php
					foreach ($signalements as $sig){?>
            <tr>
							<td><?php echo $sig->getLibelle();?>
	            </td><td><?php echo $SignalementManager->getType($sig->getId());?>
							</td><td><?php echo $CompteManager->getCompteId($sig->getUti())->getPseudo();?>
	            </td><td><?php echo $sig->getDate();?></td>
            </tr>
					<?php } ?>
					</table>
					<br />

	<br />
</div>
</div>
</center>
