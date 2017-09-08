
<?php
include("webpage/header.php");
?>

<main>

<?php

include("webpage/tableau.php");
for ($nbrTour = 0; $nbrTour < 12 ; $nbrTour++ ) {
  $IndiceRandomProduit = rand(1,4); //pour choisir un des articles au hasard

?>


  <div class="row">
     <div class="col s12 m3">
       <div class="card">
         <div class="card-image">
           <img src="<?=$fichesproduits[$IndiceRandomProduit]['srcImageProduit']?>">
           <span class="card-title"><?=$fichesproduits[$IndiceRandomProduit]['titre']?></span>
         </div>
         <div class="card-content">
           <p><?=$fichesproduits[$IndiceRandomProduit]['resume']?></p>
         </div>
         <div class="card-action">
           <a href="ficheproduit.php" class="<?=$fichesproduits[$IndiceRandomProduit]['classDansLink']?>">En savoir plus</a>
         </div>
       </div>
     </div>
   </div>;


<?php
} // je ferme ma boucle for
?>

 </main>

 <?php include("webpage/footer.php") ?>
