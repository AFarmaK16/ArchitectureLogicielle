<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>MGLSI NEWS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <script>
    document.addEventListener('DOMContentLoaded', (e) => {
      var params = window.location.href;
      var url = new URL(params);
      // var tabArray=params.split("*");
      var categorie = url.searchParams.get("categorie");
      if (categorie == null) {
        categorie = 0;
      }
      // console.log(categorie);
      document.getElementById(categorie).classList.add('active');

    });
  </script>

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/chart.css">
  <!-- Main JS File -->
  <script src=" js/index.js"></script>

</head>

<body>
  <?= $content ?>
  <footer>&copy; copyright Esp 2022</footer>
</body>

</html>