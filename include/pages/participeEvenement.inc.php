<?php
  $idEve = $_GET['id'];
  $db = new Mypdo();

  $CompteManager = new CompteManager($db);
  $ParticipeManager = new ParticipeManager($db);

  $infos = $CompteManager->getComptePseudo($_SESSION['connexion']->getPseudo());
  $id = $infos->getId();

  if($ParticipeManager->add($id, $idEve) == 1){ ?>
    <h1>Vous participez à l'évènement !</h1>
  <?php
  header("refresh:2; url=index.php?page=10&id=$idEve");
}else{ ?>
    <center><h1>Erreur, vous faites déjà parti de cet événement !</h1></center>
    <?php header("refresh:2; url=index.php?page=11&id=$idEve"); ?>
  <?php } ?>
