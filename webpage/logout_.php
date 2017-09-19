<?php session_start();

// var_dump($_POST['deconnexion']);

if ($_POST['deconnexion'] == 'oui') {
 session_destroy();
 header('Location: ../index.php');
} else {
  header('Location: ../article.php');
}


 ?>
