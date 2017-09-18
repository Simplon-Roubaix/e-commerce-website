<?php include("webpage/header.php"); 
      include("webpage/tableau.php");
      // save Key
      $key= $_GET['id'];
?>

<main  id="Main"class="row ">
  
  <div class="detail_Card col s12 row">
    <div class="HeadDetail_Card col  m6 row">
      <h2><?php echo $fichesproduits[$key]['titre']; ?></h2>
      <img id="ImgDetail"src="<?php echo $fichesproduits[$key]['srcImageProduit']; ?>" alt="<?php echo $fichesproduits[$key]['titre']; ?>" class="col s12">
    </div>
    
  <div id="descriptionAndPrice">
    <p class="text-justify"><?php echo $fichesproduits[$key]['description']; ?></p>
    <p><?php echo $fichesproduits[$key]['prix']; ?>€</p>
  </div>
  </div>
  
  <button id="BtnRetour" class="btn red lighten-2">
    <a href="index.php">Retour</a>
  </button>
  
</main>

<?php include("webpage/footer.php") ?>
