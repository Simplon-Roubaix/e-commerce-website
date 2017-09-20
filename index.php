<?php
session_start(); // On démarre la session AVANT toute chose

include("webpage/header.php");
include("webpage/header_index.php");
// var_dump($_SESSION['deco']);

?>

<main id="articles">

<?php



// connexion à bdd
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=Ecommerce;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}



// SELECT jeux_video.nom, proprietaires.prenom
// FROM proprietaires, jeux_video
// SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
// FROM proprietaires p
// INNER JOIN jeux_video j
// ON j.ID_proprietaire = p.ID

// A FAIRE faire une jointure avec les tables article et image
$articles = $bdd->prepare('SELECT article.resume as resume, article.titre as titre, article.id as id, article.prix as prix, img.name as nom FROM article INNER JOIN img ON img.article_id = article.id') or die(print_r($bdd->errorInfo()));
$articles->execute();



// OK faire boucle while
while ($article = $articles->fetch()) {
?>
<div class="row">
     <div>
       <div class="card">
         <div class="card-image">
           <img src="img/<?=$article['nom']?>" class="packshot" alt="illustration produit">
           <span class="card-title red-text text-lighten-2"><?=$article['titre']?></span>
         </div>
         <div class="card-content">
           <p><?=$article['resume']?></p>
         </div>
         <div class="card-action grey darken-2 white-text">
           <a class="white-text" href="ficheproduits.php?id=<?=$article['id']?>">En savoir plus <span class="tagprice red lighten-2"> <?=$article['prix']?>€</span></a>
         </div>
       </div>
     </div>
   </div>
<?php
} // je ferme ma boucle while

// OK fermer la requete
$articles->closeCursor();

?>

 </main>

 <?php include("webpage/footer.php") ?>
