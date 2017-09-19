<?php
session_start();
?>


   <?php 
   try{ 
     $bdd = new PDO('mysql:host=localhost;dbname=Ecommerce;charset=utf8', 'root', 'root');
     $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
   } 
   catch(PDOException $e){ 
      echo $e->getMessage(); 
   } 
   

   $titre = strip_tags($_POST["titre"]);
   $description = strip_tags($_POST["description"]);
   $resume = strip_tags($_POST["resume"]);
   $prix = ($_POST["prix"]);   
  
   
   if (isset($_POST["titre"])&& isset($_POST["description"])&& isset($_POST["resume"]) && isset($_POST["prix"])) {
     $req = $bdd->prepare('INSERT INTO article (titre,description,resume,prix) VALUES(:titre,:description,:resume,:prix)');
     $req->execute(array(
       'titre' => $titre,
       'description' => $description,
       'resume' => $resume,
       'prix' => $prix
       
       
     ));
   }
   $article_id = $bdd->lastInsertId();
   $image =$_FILES['image'];

if (isset($_FILES["image"])) {
  $reqImage = $bdd->prepare('INSERT INTO img (name,size,type,article_id) VALUES(:name,:size,:type,:article_id)');
  $reqImage->execute(array(
    'name' => $image['name'],
    'size' => $image['size'],
    'type' => $image['type'],
    'article_id' => $article_id

  ));
}

    header('Location: article.php?submission=ok');      
?>
