<center><img src="./img/routeBan2.jpg" class="img-responsive"></center>
<div class="container">
  <div class="row">
    <div class="col-xs-12">

     <center><h1>Prévention routière</h1></center>
     <br>
     <?php if(!empty($_SESSION['connexion'])){
       ?>
       <div class="col-md-4 col-md-offset-2">
          <p> Coucou c'est moi lol </p>
       </div>
       <div class="col-md-4">
          <p> Coucou c'est moi lol </p>
       </div>
       <?php
     }
     else {
     ?>

     <div class="col-md-4 col-md-offset-2">
        <a href="./index.php?page=1"><center><button type="button" class="bouton bouton1">S'inscrire</button></center></a>
     </div>
     <div class="col-md-4">
        <a href="./index.php?page=3"><center><button type="button" class="bouton bouton2">Connexion</button></center></a>
     </div>
   <?php } ?>

   </div>
 </div>
</div>
</div>
