<!-- Modal Structure -->
<div id="login" class="modal bottom-sheet">
  <div class="modal-content">
    <a href="#!" class="closed modal-action modal-close waves-effect waves-green btn-flat red-text text-lighten-2">X</a>
    <h4 class="red-text text-lighten-2">Me déconnecter</h4>
    <form class="logout" action="./webpage/logout_.php" method="post">
      <div class="red-text text-lighten-2">
        Êtes-vous sûr ???
      </div>
      <span class="grey btn">
        <input type="radio" name="deconnexion" value="oui" id="oui"/>
        <label for="oui">Oui</label>
      </span>
      <span class="grey btn">
        <input type="radio" name="deconnexion" value="non" id="non" />
        <label for="non">Non</label>
      </span>
      <div>
        <input class="btn red lighten-2" type="submit" name="" value="Valider">
      </div>
    </form>
  </div>
</div>
