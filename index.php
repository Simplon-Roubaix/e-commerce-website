<?php
session_start(); // On démarre la session AVANT toute chose

include("webpage/header.php");
include("webpage/header_index.php");
// var_dump($_SESSION['deco']);

?>

<main id="articles">

<?php

include("webpage/tableau.php");

for ($nbrTour = 0; $nbrTour < 15 ; $nbrTour++ ) {
  $IndiceRandomProduit = rand(1,4); //pour choisir un des articles au hasard
?>
<div class="row">
     <div>
       <div class="card">
         <div class="card-image">
           <img src="<?=$fichesproduits[$IndiceRandomProduit]['srcImageProduit']?>" class="packshot" alt="illustration produit">
           <span class="card-title red-text text-lighten-2"><?=$fichesproduits[$IndiceRandomProduit]['titre']?></span>
         </div>
         <div class="card-content">
           <p><?=$fichesproduits[$IndiceRandomProduit]['resume']?></p>
         </div>
         <div class="card-action grey darken-2 white-text">
           <a class="white-text" href="<?=$fichesproduits[$IndiceRandomProduit]['url']?>id=<?=$IndiceRandomProduit?>">En savoir plus <span class="tagprice red lighten-2"> <?=$fichesproduits[$IndiceRandomProduit]['prix']?>€</span></a>
         </div>
       </div>
     </div>
   </div>
<?php
} // je ferme ma boucle for
?>

 </main>

 <?php include("webpage/footer.php") ?>
