<!-- Static navbar -->
<?php
  if(!empty($_SESSION['connexion'])){
    $infos = ($_SESSION['connexion']);

?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Prev'Agile</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Evénement<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Ajouter événement</a></li>
            <li><a href="#">Lister événement</a></li>
            <li><a href="#">Recherche événement</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prévention<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Gestes qui sauvent</a></li>
            <li><a href="#">Numéros d'urgence</a></li>
            <li><a href="#"></a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../navbar-fixed-top/"><?= $infos->getPrenom() ?></a></li>
        <li><a href="./index.php?page=12">Deconnexion</a></li>

      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<?php
  }
  else{
?>
   <nav class="navbar navbar-default navbar-fixed-top">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">Prev'Agile</a>
       </div>
       <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">

           <li><a href="./index.php?page=1">S'inscrire</a></li>
           <li><a href="./index.php?page=3">Se connecter</a></li>
         </ul>
       </div><!--/.nav-collapse -->
     </div>
   </nav>
   <?php } ?>
