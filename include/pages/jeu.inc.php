<h1>Désigne ton SAM !</h1>

<p>Fais ce jeu pour déterminer SAM !</p>

<?php if(!isset($_POST['joueur1'])){ ?>

  <form action="index.php?page=5" method="post">
    <label>Nom du premier Joueur : </label><input type="text" name="joueur1" placeholder="Joueur 1" required /></br>
    <label>Nom du second Joueur : </label><input type="text" name="joueur2" placeholder="Joueur 2" required /></br>
    <label>Nom du troisième Joueur : </label><input type="text" name="joueur3" placeholder="Joueur 3" required /></br>
    <label>Nom du quatrième Joueur : </label><input type="text" name="joueur4" placeholder="Joueur 4" required /></br>
    <label>Nom du cinquième Joueur : </label><input type="text" name="joueur5" placeholder="Joueur 5" required /></br>
    <input type="submit" value="Valider !" />
  </form>

<?php }else{
  $_SESSION['joueur1'] = $_POST['joueur1'];
  $_SESSION['joueur2'] = $_POST['joueur2'];
  $_SESSION['joueur3'] = $_POST['joueur3'];
  $_SESSION['joueur4'] = $_POST['joueur4'];
  $_SESSION['joueur5'] = $_POST['joueur5'];
?>

  <form action="index.php?page=5" method="post">
    <input type="submit" value="<?php echo $_SESSION['joueur1']?>" />
    <input type="submit" value="<?php echo $_SESSION['joueur2']?>" />
    <input type="submit" value="<?php echo $_SESSION['joueur3']?>" />
    <input type="submit" value="<?php echo $_SESSION['joueur4']?>" />
    <input type="submit" value="<?php echo $_SESSION['joueur5']?>" />
  </form>

<?php } ?>
