<?php ob_start(); ?>
<div id="h">
  <?php
  foreach ($ListArticles as $article) {
  ?>
    <div class='card' onclick='$details'>
      <div class='card-header card-header-primary'>
        <h4 class='card-title'><?=
                                $article->titre;
                                ?></h4>
      </div>

      [Creation:<?= $article->dateCreation; ?>----
      Modification:<?= $article->dateModification; ?>]<br>
      <?= mb_substr($article->contenu, 0, 100, 'UTF-8') ?>
      <a href="index.php?action=details&article=<?= $article->id ?>">Voir plus...</a>
    </div>
  <?php }
  ?>
</div>
</div>
<?php
$content = ob_get_clean();
require('layout.php') ?>