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
        <div id="liste-oeuvres">
        <?php require("./data/works.php") ?>
        <?php foreach($works as $index=>$work) { ?>
            <article class="oeuvre">
                <a href=<?php echo "./oeuvre.php?oeuvre=$index" ?>>
                    <img src=<?php echo $work->imagePath ?> alt=<?php echo $work->title ?>>
                    <h2><?php echo $work->title ?></h2>
                    <p class="description"><?php echo $work->artistName ?></p>
                </a>
            </article>
        <?php }?>
        </div>
    </main>
    <?php include("partials/footer.php") ?>
</body>
</html>