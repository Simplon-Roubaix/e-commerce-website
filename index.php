
<?php
include("webpage/header.php");
?>

<main id="articles">

<?php

include("webpage/tableau.php");
for ($nbrTour = 0; $nbrTour < 16 ; $nbrTour++ ) {
  $IndiceRandomProduit = rand(1,4); //pour choisir un des articles au hasard
?>


  <div class="row">
     <div>
       <div class="card">
         <div class="card-image">
           <img src="<?=$fichesproduits[$IndiceRandomProduit]['srcImageProduit']?>" class="packshot" alt="illustration produit">
           <span class="card-title"><?=$fichesproduits[$IndiceRandomProduit]['titre']?></span>
         </div>
         <div class="card-content">
           <p><?=$fichesproduits[$IndiceRandomProduit]['resume']?></p>
         </div>
         <div class="card-action">
           <a href="<?=$fichesproduits[$IndiceRandomProduit]['url']?>">En savoir plus <span class="tagprice"> <?=$fichesproduits[$IndiceRandomProduit]['prix']?>€</span></a>
         </div>
       </div>
     </div>
   </div>


<?php
} // je ferme ma boucle for
?>

 </main>

 <?php include("webpage/footer.php") ?>
