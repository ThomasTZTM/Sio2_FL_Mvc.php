<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listes des livres</title>
</head>
<body>

<?php
?>

<div class="container my-4">
    <h3 class="mb-3 text-secondary">Voici la liste des livres : </h3>
    <div class="row">
        <?php foreach ($livres as $livre) : ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-danger">
                    <div class="card-body">
                        <h5 class="card-title"><span class="text-danger">Titre : </span><?= $livre->getTitre() ?></h5>
                        <a href="index.php?route=livre-detail&idLivre=<?= $livre->getId()?>" class="btn btn-secondary mt-3">Detail du livre</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="index.php" class="btn btn-danger mt-3">Retour à l'accueil</a>
</div>



</body>
</html>
