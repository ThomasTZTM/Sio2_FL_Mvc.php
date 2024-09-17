<?php
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail du livre</title>
</head>
<body>

<div class="container my-4">

</div>

<div class="container my-4 text-center">
    <h3 class="mb-3 text-secondary">Voici les détails du livre : </h3>
    <div class="row">
        <?php foreach ($livres as $livre) : ?>
            <div class="mb-4 mt-5">
                <div class="h-100 border-danger">
                    <div class="">
                        <h5 class><span class="text-danger">ID : </span><?= $livre->getID() ?></h5>
                        <h5 class><span class="text-danger">Titre : </span><?= $livre->getTitre() ?></h5>
                        <h5 class><span class="text-danger">Nombre de page : </span><?= $livre->getNbPage() ?></h5>
                        <h5 class><span class="text-danger">Auteur : </span><?= $livre->getAuteur() ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="index.php" class="btn btn-danger mt-3">Retour à l'accueil</a>
    <a href="index.php?route=livre-list" class="btn btn-success mt-3">Retour à la liste des films</a>
</div>

</body>
</html>
