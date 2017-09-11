<?php include("webpage/header.php"); ?>
<?php include("webpage/tableau.php"); ?>
<?php
  $key= $_GET['id'];
?>
  <div class="detail_Card">
    <div class="HeadDetail_Card">
      <h2><?php echo $fichesproduits[$key]['titre']; ?></h2>
      <img id="ImgDetail"src="<?php echo $fichesproduits[$key]['srcImageProduit']; ?>" alt="<?php echo $fichesproduits[$key]['titre']; ?>" class="col-12 mx-auto">
    </div>
  <div class="">
    <p class="text-justify"><?php echo $fichesproduits[$key]['description']; ?></p>
    <p><?php echo $fichesproduits[$key]['prix']; ?>€</p>
  </div>
  </div>
  <div id="BtnRetour">
    <a href="index.php" class="btn red lighten-2">Retour</a>
  </div>
  

<?php include("webpage/footer.php") ?>
