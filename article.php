

<!-- ICI j'insère mes verifs pseudo + mdp -->
<?php

if (isset($_POST['pseudo']) AND isset($_POST['mdp'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = sha1($_POST['mdp']);

    // connexion à bdd
    try
    {
      // ATTENTION A REMODIFIER LE NOM DE LA BDD SI BESOIN
      $bdd = new PDO('mysql:host=localhost;dbname=site_marchand;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }

    $verif = $bdd->prepare('SELECT pseudo, mdp FROM users') or die(print_r($bdd->errorInfo()));
    $verif->execute();
    $match = "non";


    while ($test= $verif->fetch())
    {
      if ($test['pseudo'] == $pseudo AND $test['mdp'] == $mdp) {
        $match = "oui";
?>

<?php include("webpage/header.php");
include("webpage/logout.php"); ?>

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


if ($match != 'oui' ) {
   header('Location: index.php');
}
 ?>
