<?php
require_once "Fonctions.php";
require "Connexion.php";
// DATAS RECUPERES
$recuperer= explode("*", $_GET['tab']);
$id=$recuperer[0];
$dest=$recuperer[1];
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MGLSI NEWS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <script src=" js/index.js"></script>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/chart.css">

  <script>
  </script>


   </head>

<body onload="window.location.hash = 'contact'">
      <div id="navigation" class="navbar navbar-fixed-top">
        <div class="contain">
          <ul class='nav navbar-nav'>
            <li><a href='index.php' class='smoothscroll'>Acceuil</a></li>
              <?php 
                echo genereMenu($con);
              ?>
          </ul>        
        </div>
    </div>

    <div id="h">

  </div>
    <div  id='g' class="centered">
        <?php

          if ($dest=="all") {
            echo "<a href='index.php' style='color:red;pointer:cursor;'>Retour</a>";
          }

          echo AfficherArticle($id,$con,$dest);

        ?>
    </div>

</body>
</html>
