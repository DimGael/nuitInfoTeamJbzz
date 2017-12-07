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
        <li><a href="./index.php">Accueil</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prévention<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Premiers gestes</a></li>
            <li><a href="#">Numéros d'urgence</a></li>
            <li><a href="#"></a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Super</li>
            <li><a href="#">Lien</a></li>
            <li><a href="#">Autre lien</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./">Mon Compte</a></li>
        <li><a href="../navbar-fixed-top/"><?= $infos->getPrenom() ?></a></li>
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
         <ul class="nav navbar-nav navbar-left">
           <li><a href="./index.php">Accueil</a></li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prévention<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="#">Premiers gestes</a></li>
               <li><a href="#">Numéros d'urgence</a></li>
               <li><a href="#"></a></li>
               <li role="separator" class="divider"></li>
               <li class="dropdown-header">Super</li>
               <li><a href="#">Lien</a></li>
               <li><a href="#">Autre lien</a></li>
             </ul>
           </li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
           <li><a href="../navbar/">On met des trucs à droite</a></li>
           <!--<li><a href="./">Static top <span class="sr-only">(current)</span></a></li>
           <li><a href="../navbar-fixed-top/">Fixed top</a></li>-->
         </ul>
       </div><!--/.nav-collapse -->
     </div>
   </nav>
   <?php } ?>
