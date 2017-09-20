<?php 
session_start();
   try{ 
     $bdd = new PDO('mysql:host=localhost;dbname=Ecommerce;charset=utf8', 'root', 'root');
     $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
   } 
   catch(PDOException $e){ 
      echo $e->getMessage(); 
   }
   
   
   
   $articleSup = $bdd->prepare("DELETE FROM article WHERE id = ?");
   $articleSup->execute(array ($_GET['id']));
   
   
   $imageSupp = $bdd->prepare("DELETE FROM img WHERE id = ?");
   $imageSupp->execute(array ($_GET['id']));
   
   $_SESSION['SUPP'] = "L'article a bien été supprimé."; 
   header('Location: article.php');
?>
