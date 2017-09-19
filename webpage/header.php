<?php

// faire l'ouverture de session pour les super variables
 ?>

<!doctype html>
<html class="no-js" lang="">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>e-commerce-website</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="logo.ico" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.js">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/normalize.css">
    </head>

    <body>




      <!-- beginning of the header  -->
      <header>
        <nav>
          <div class="card-panel nav-wrapper">
            <a href="index.php" class="divLogo brand-logo">
              <img class="logo" src="img/logo.png" alt="logo entreprise">
              <h1><span class="part1h1 grey-text text-darken-1">Phone</span><span class="fontSpecial red-text text-lighten-2">House</span></h1>
            </a>
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="#">
                  <i class="material-icons grey-text text-darken-2">search</i>
                  <!-- //mettre un input pour simuler recherche -->
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="material-icons grey-text text-darken-2">person</i>
                  <!-- //mettre un toggle pour s'enregistrer et sidentifier -->
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="material-icons grey-text text-darken-2">local_grocery_store</i>
                </a>
              </li>
              <li>
                <!-- Modal Trigger -->
                <a class="modal-trigger" data-target="login" href="#login">
                  <i class="material-icons grey-text text-darken-2">web</i>
                </a>
              </li>
            </ul>

          </div>
        </nav>
      </header>
