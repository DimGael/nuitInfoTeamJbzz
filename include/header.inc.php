<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Prev'agile</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">
  <link href="css/moncss.css" rel="stylesheet">

  <!-- Static navbar -->
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
     <div class="debut">
