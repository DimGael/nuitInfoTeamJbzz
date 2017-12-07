<h1>Désigne ton SAM !</h1>

<p>Fais ce jeu pour déterminer SAM !</p>

<?php
if(!isset($_POST['joueur1']) && !isset($_SESSION['joueur1'])){ ?>

  <form action="index.php?page=5" method="post">
    <label>Nom du premier Joueur : </label><input type="text" name="joueur1" placeholder="Joueur 1" required /></br>
    <label>Nom du second Joueur : </label><input type="text" name="joueur2" placeholder="Joueur 2" required /></br>
    <label>Nom du troisième Joueur : </label><input type="text" name="joueur3" placeholder="Joueur 3" required /></br>
    <label>Nom du quatrième Joueur : </label><input type="text" name="joueur4" placeholder="Joueur 4" required /></br>
    <label>Nom du cinquième Joueur : </label><input type="text" name="joueur5" placeholder="Joueur 5" required /></br>
    <input type="submit" value="Valider !" />
  </form>

<?php
}elseif(!isset($_SESSION['joueur1'])){
  $pdo = new Mypdo();
  $defiMan = new DefiManager($pdo);

  $_SESSION['defis'] = $defiMan->getSixRandomDefi();

  $_SESSION['compteur']=1;
  ?>

  <p><?php echo   $_SESSION['defis'][1]->getLibDefi(); ?></p>

  <?php
  $_SESSION['joueur1'] = $_POST['joueur1'];
  $_SESSION['joueur2'] = $_POST['joueur2'];
  $_SESSION['joueur3'] = $_POST['joueur3'];
  $_SESSION['joueur4'] = $_POST['joueur4'];
  $_SESSION['joueur5'] = $_POST['joueur5'];
  $_SESSION['scorej1']=0;
  $_SESSION['scorej2']=0;
  $_SESSION['scorej3']=0;
  $_SESSION['scorej4']=0;
  $_SESSION['scorej5']=0;
  ?>
  <p> Cliquez sur le gagnant!</p>
  <form action="index.php?page=5" method="post">
    <input type="submit" name="bj1" value="<?php echo $_SESSION['joueur1']?>" />
    <input type="submit" name="bj2" value="<?php echo $_SESSION['joueur2']?>" />
    <input type="submit" name="bj3" value="<?php echo $_SESSION['joueur3']?>" />
    <input type="submit" name="bj4" value="<?php echo $_SESSION['joueur4']?>" />
    <input type="submit" name="bj5" value="<?php echo $_SESSION['joueur5']?>" />
  </form>
  <?php
  if(isset($_POST['bj1']) || isset($_POST['bj2']) || isset($_POST['bj3']) || isset($_POST['bj4']) || isset($_POST['bj5'])){
    if(isset($_POST['bj1'])){
      $_SESSION['scorej1']=$_SESSION['scorej1']+rand(1,10000);
      unset($_POST['bj1']);
    }elseif (isset($_POST['bj2'])) {
      $_SESSION['scorej2']=$_SESSION['scorej2']+rand(1,10000);
      unset($_POST['bj2']);
    }elseif (isset($_POST['bj3'])) {
      $_SESSION['scorej3']=$_SESSION['scorej3']+rand(1,10000);
      unset($_POST['bj3']);
    }elseif (isset($_POST['bj4'])) {
      $_SESSION['scorej4']=$_SESSION['scorej4']+rand(1,10000);
      unset($_POST['bj4']);
    }else{
      $_SESSION['scorej5']=$_SESSION['scorej5']+rand(1,10000);
      unset($_POST['bj5']);
    }
  }
  $_SESSION['compteur']++;
}elseif($_SESSION['compteur']<6){

?>
  <p><?php echo   $_SESSION['defis'][$_SESSION['compteur']]->getLibDefi(); ?></p>

  <p> Cliquez sur le gagnant!</p>

  <form action="index.php?page=5" method="post">
    <input type="submit" name="bj6" value="<?php echo $_SESSION['joueur1']?>" />
    <input type="submit" name="bj7" value="<?php echo $_SESSION['joueur2']?>" />
    <input type="submit" name="bj8" value="<?php echo $_SESSION['joueur3']?>" />
    <input type="submit" name="bj9" value="<?php echo $_SESSION['joueur4']?>" />
    <input type="submit" name="bj10" value="<?php echo $_SESSION['joueur5']?>" />
  </form>

<?php
if(isset($_POST['bj6']) || isset($_POST['bj7']) || isset($_POST['bj8']) || isset($_POST['bj9']) || isset($_POST['bj10'])){
  if(isset($_POST['bj6'])){
    $_SESSION['scorej1']=$_SESSION['scorej1']+rand(1,10000);
    unset($_POST['bj6']);
  }elseif (isset($_POST['bj7'])) {
    $_SESSION['scorej2']=$_SESSION['scorej2']+rand(1,10000);
    unset($_POST['bj7']);
  }elseif (isset($_POST['bj8'])) {
    $_SESSION['scorej3']=$_SESSION['scorej3']+rand(1,10000);
    unset($_POST['bj8']);
  }elseif (isset($_POST['bj9'])) {
    $_SESSION['scorej4']=$_SESSION['scorej4']+rand(1,10000);
    unset($_POST['bj9']);
  }else{
    $_SESSION['scorej5']=$_SESSION['scorej5']+rand(1,10000);
    unset($_POST['bj10']);
  }

}
$_SESSION['compteur']++;

}
    else{
      ?> <h2> Fin de la partie! </h2>
        <p>Score de: <?php echo $_SESSION['joueur1']?> =  <?php echo $_SESSION['scorej1']?></p>
        <p>Score de: <?php echo $_SESSION['joueur2']?> =  <?php echo $_SESSION['scorej2']?></p>
        <p>Score de: <?php echo $_SESSION['joueur3']?> =  <?php echo $_SESSION['scorej3']?></p>
        <p>Score de: <?php echo $_SESSION['joueur4']?> =  <?php echo $_SESSION['scorej4']?></p>
        <p>Score de: <?php echo $_SESSION['joueur5']?> =  <?php echo $_SESSION['scorej5']?></p>

        <p>Le joueur <?php echo rand(1,5) ?> sera SAM ce soir! </p>

        <?php
        unset($_SESSION['joueur1']);
        unset($_SESSION['joueur2']);
        unset($_SESSION['joueur3']);
        unset($_SESSION['joueur4']);
        unset($_SESSION['joueur5']);

        unset($_SESSION['scorej1']);
        unset($_SESSION['scorej2']);
        unset($_SESSION['scorej3']);
        unset($_SESSION['scorej4']);
        unset($_SESSION['scorej5']);

        unset($_SESSION['compteur']);

        unset($_SESSION['defis']);
    } ?>
