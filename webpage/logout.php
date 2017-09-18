<!-- Modal Structure -->
<div id="login" class=" red lighten-2 modal bottom-sheet">
  <div class="modal-content">
    <a href="#!" class="closed modal-action modal-close waves-effect waves-green btn-flat">X</a>
    <h4>Me déconnecter</h4>
    <form class="login" action="article.php" method="post">
      Êtes-vous sûr ???
      
      <label for="pseudo"><span>Votre pseudo : </span><input type="text" name="pseudo" value="" required></label> <br>
      <label for="mdp"><span>Votre mot de passe :</span> <input type="password" name="mdp" value="" required></label> <br>
      <input class="btn grey darken-2" type="submit" name="" value="Valider">
    </form>
  </div>
</div>
