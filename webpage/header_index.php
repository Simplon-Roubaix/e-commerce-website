<li>
  <!-- Modal Trigger -->
  <?php
    if (isset($_SESSION['match']))
    {
  ?>
      <a class="modal-trigger" data-target="login" href="./article.php">
        <i class="material-icons grey-text text-darken-2">web</i>
      </a>
  <?php
} else {
  ?>
      <a class="modal-trigger" data-target="login" href="#login">
        <i class="material-icons grey-text text-darken-2">web</i>
      </a>
  <?php
}
   ?>
</li>
</ul>


<!-- Modal Structure -->
<div id="login" class=" red lighten-2 modal bottom-sheet">
  <div class="modal-content">
    <a href="#!" class="closed modal-action modal-close waves-effect waves-green btn-flat">X</a>
    <h4>Me connecter</h4>
    <form class="login" action="article.php" method="post">
      <label for="pseudo"><span>Votre pseudo : </span><input type="text" name="pseudo" value="" required></label> <br>
      <label for="mdp"><span>Votre mot de passe :</span> <input type="password" name="mdp" value="" required></label> <br>
      <input class="btn grey darken-2" type="submit" name="" value="Valider">
    </form>
  </div>
</div>


</div>
</nav>
</header>
