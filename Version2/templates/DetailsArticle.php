<?php ob_start(); ?>
<div id='h'>
  <div class='card' onclick='$details'>
    <div class='card-header card-header-primary'>
      <h4 class='card-title'><?=
                              $ArticleDetails->titre;
                              ?></h4>
      <a href="index.php" id='back'>Retour</a>
    </div>

    [Creation:<?= $ArticleDetails->dateCreation; ?>----
    Modification:<?= $ArticleDetails->dateModification; ?>]<br>
    <?= $ArticleDetails->contenu; ?>

  </div>
</div>
<?php
$content = ob_get_clean();
require('layout.php') ?>