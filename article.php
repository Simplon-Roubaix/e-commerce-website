<?php
session_start();
// $_SESSION['match'];


if ((isset($_POST['pseudo']) AND isset($_POST['mdp'])) OR $_SESSION['match'] == 'oui') {

    // connexion à bdd
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=Ecommerce;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }

    $verif = $bdd->prepare('SELECT pseudo, mdp FROM users') or die(print_r($bdd->errorInfo()));
    $verif->execute();


    while ($test= $verif->fetch())
    {
      if (isset($_SESSION['match']) OR ($test['pseudo'] == htmlspecialchars($_POST['pseudo']) AND $test['mdp'] == sha1($_POST['mdp']))) {
        $_SESSION['match'] = "oui";

        include("webpage/header.php");
        include("webpage/header_article.php");
        // include("webpage/logout.php");

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





      <div class="container-fluid valign-wrapper" id="AddRemove">
       <div class="row" id="rowAddRemove">
        <button class="waves-effect waves-light btn modal-trigger grey col s3 " data-target="modal1">Add</button>
        <button class="waves-effect waves-light btn modal-trigger grey col s3 " data-target="modal2">remove</button>
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




      <!-- ICI METTRE LE CODE POUR LA DIV QUI DISPARAIT ET QUI DIT ARTICLE AJOUTE !!  -->
      <?php if (isset($_GET['submission']) && $_GET['submission'] == 'ok' ): ?>
        <?php echo "chocolat"?>


      <?php endif; ?>


    <?php

    $verif->closeCursor();

          }
        }
    } else {
      header('Location: index.php');
    }


    if (!isset($_SESSION['match'])) {
       header('Location: index.php');
    }
     ?>
