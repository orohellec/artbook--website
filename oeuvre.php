<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
  <?php include("partials/header.php") ?>
  <main>
    <?php 
      require("data/works.php");
      $work = $works[$_GET["oeuvre"]];
    ?>
      <article id="detail-oeuvre">
          <div id="img-oeuvre">
              <img src=<?php echo $work->imagePath ?> alt=<?php echo $work->title ?>>
          </div>
          <div id="contenu-oeuvre">
              <h1><?php echo $work->title ?></h1>
              <p class="description"><?php echo $work->artistName ?></p>
              <p class="description-complete">
                <?php echo $work->description ?>
              </p>
          </div>
      </article>
  </main>
  <?php include("partials/footer.php") ?>
  </body>
</html>