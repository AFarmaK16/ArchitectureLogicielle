<?php ob_start(); ?>
<div id="h">
  <?php
  foreach ($ListArticles as $article) {
  ?>
    <div class='card' onclick='$details'>
      <div class='card-header card-header-primary'>
        <h4 class='card-title'><?= $article->titre; ?></h4>
      </div>

      [Creation:<?= $article->dateCreation; ?>----
      Modification:<?= $article->dateModification; ?>]<br>
      <?= $article->contenu; ?>
    </div>
  <?php }
  $content = ob_get_clean();
  ?>
</div>
<?php require('layout.php') ?>