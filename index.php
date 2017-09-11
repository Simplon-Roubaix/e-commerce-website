<?php
include("webpage/header.php");
?>

<main id="articles">

<?php
include("webpage/tableau.php");



foreach ($fichesproduits as $key => $value) :?>
<?php for ($i=0; $i < 4 ; $i++) :
  $IndiceRandomProduit = rand(1,4)?>
  

  <div class="row">
     <div>
       <div class="card">
         <div class="card-image">
           <img src="<?=$value['srcImageProduit']?>" class="packshot" alt="illustration produit">
           <span class="card-title red-text text-lighten-2"><?=$value['titre']?></span>
         </div>
         <div class="card-content">
           <p><?=$value['resume']?></p>
         </div>
         <form  class="card-action grey darken-2 white-text" method="post">
          <input type="hidden" name="id[]" value="<?php echo $id_fichesproduits ?>">
          <a class="white-text" href="ficheproduits.php?id=<?=$key?>">En savoir plus <span class="tagprice red lighten-2"> <?=$value['prix']?>€</span></a>
        </form>
       </div>
     </div>
   </div>

  
<?php endfor; ?>

<?php endforeach; // je ferme ma boucle for
?>

 </main>

 <?php include("webpage/footer.php") ?>
