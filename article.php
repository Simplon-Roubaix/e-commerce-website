<?php include("webpage/header.php");?>
<?php if (isset($_GET['submission']) && $_GET['submission'] == 'ok' ): ?>
  <?php echo "chocolat"?>
<?php endif; ?>


<form id="formArticle" action="article_.php" method="post" enctype="multipart/form-data">
  <input  name="titre" type="text" class="form-control" placeholder="titre" required>
  <textarea name="description" class="form-control" placeholder="description" required></textarea>
  <input  name="resume" type="text" class="form-control" placeholder="resume" required>
  <input  name="prix" type="number" class="form-control" placeholder="prix" required>
  <input  name="url" type="text" class="form-control" placeholder="url"required>
  <input type="file" name="image" class="form-control" >
  <button class="btn waves-effect waves-light">Submit
    <i class="material-icons right">send</i>
  </button>
</form>


<?php include("webpage/footer.php");?>
