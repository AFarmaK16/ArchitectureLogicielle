<?php
include 'Connexion.php';    
include 'Fonctions.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MGLSI NEWS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/chart.css">
   </head>

<body onload="window.location.hash = 'contact'">
      <div id="navigation" class="navbar navbar-fixed-top">
        <div class="contain">
          <ul class='nav navbar-nav'>
            <li><a href='#' class='active'>Acceuil</a></li>
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
        echo articleResume($con);
        ?>
    </div>
  <script src=" js/index.js"></script>


</body>
</html>
