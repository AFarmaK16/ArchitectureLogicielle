  <div id="navigation" class="navbar navbar-fixed-top">
    <h6>ESP NEWS</h6>
    <div class="contain">
      <ul class='nav navbar-nav '>
        <li><a href="index.php?action=all" id='0'>Acceuil</a></li>
        <?php
        // echo "bjr";
        foreach ($ListCategories as $categorie) { ?>
          <li id='<?= $categorie->id ?>'><a href="index.php?action=spe&categorie=<?= $categorie->id ?>">
              <?= $categorie->libelle; ?>
            </a></li>
        <?php }
        ?>
      </ul>
    </div>
  </div>