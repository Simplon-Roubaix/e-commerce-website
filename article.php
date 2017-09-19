<?php 
   try{ 
     $bdd = new PDO('mysql:host=localhost;dbname=Ecommerce;charset=utf8', 'root', 'root');
     $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
   } 
   catch(PDOException $e){ 
      echo $e->getMessage(); 
   } 
   
   
 $article = $bdd->prepare("SELECT * FROM article");
 $article->execute();
 $donnee_article = $article->fetchAll(); ?>




<?php include("webpage/header.php");?>


<div class="container-fluid valign-wrapper" id="AddRemove">
 <div class="row" id="rowAddRemove">
  <button class="waves-effect waves-light btn modal-trigger red lighten-2 col s3 " data-target="modal1">Add</button>
  <button class="waves-effect waves-light btn modal-trigger red lighten-2 col s3 " data-target="modal2">remove</button>
 </div>   
</div>



<div id="modal2" class="modal">
  <div class="modal-content">
    <?php foreach ($donnee_article as $key => $value) : ?>
      <p class="suppArticleP">
        
      <input type="hidden" name="idD" value="<?php echo $value->id ?>">
      <input  class="inputTitre" name="idTitre" value="<?php echo $value->titre ?>" readonly>
      <a class="btn waves-effect waves-light red lighten-2" href="articleSupp.php?id=<?php echo $value->id ?>">del</a>
  
    </p>
      
    <?php endforeach ;  ?>
    
  </div>
  <div class="modal-footer">
    <a class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
  </div>
</div>

  
  <div id="modal1" class="modal">
    <div class="modal-content">
      <div class="row">
          <form id="formArticle" action="article_.php" method="post" enctype="multipart/form-data">
            <input  name="titre" type="text" class="form-control" placeholder="titre" required>
            <textarea name="description" class="form-control" placeholder="description" required></textarea>
            <input  name="resume" type="text" class="form-control" placeholder="resume" required>
            <input  name="prix" type="number" class="form-control" placeholder="prix" required>
            <input type="file" name="image" class="form-control" >
            <button class="btn waves-effect waves-light red lighten-2">Submit
              <i class="material-icons right">send</i>
            </button>
          </form>         
      </div>
    </div>
    <div class="modal-footer">
      <a class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
  
  
  
    
    
    
<?php include("webpage/footer.php");?>
