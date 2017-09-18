<?php include("webpage/header.php");?>

<div class="container-fluid valign-wrapper" id="AddRemove">
 <div class="row" id="rowAddRemove">
  <button class="waves-effect waves-light btn modal-trigger red lighten-2 col s3 " data-target="modal1">Add</button>
  <button class="waves-effect waves-light btn modal-trigger red lighten-2 col s3 " data-target="modal2">remove</button>
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
            <input  name="url" type="text" class="form-control" placeholder="url"required>
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
  
  
  <div id="modal2" class="modal">
    <div class="modal-content">
    </div>
    <form class="" action="article_.php" method="post">
      <input type="select" name="article" class="form-control" placeholder="Titre">
        <button class="btn waves-effect waves-light red lighten-2">Submit
    </form>
    <div class="modal-footer">
      <a class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
    
    
    
<?php include("webpage/footer.php");?>
