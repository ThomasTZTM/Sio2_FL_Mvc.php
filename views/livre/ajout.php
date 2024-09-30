<?php

use App\Entity\Livre;

$erreurs = [];
$titre = "";
$nbpage = "";
$auteur = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //formulaire a été soumis
    //Traiter les données du formulaire
    //Récupérer les valeur saisis par l'utilisateur
    //superglobal $post qui va etre un tablo assoc
    $titre = $_POST["titre"];
    $nbpage = $_POST["nbpage"];
    $auteur = $_POST["auteur"];

    //---------------------------------------------------------------------------------
    //---------------------------------------------------------------------------------
    //---------------------------------------------------------------------------------

    if (empty($titre)) {
        $erreurs['titre'] = "Le tire est obligatoire";
    }if (empty($nbpage)) {
        $erreurs['nbpage'] = "Le nombre de page est obligatoire";
    }if (empty($auteur)) {
        $erreurs['auteur'] = "L'auteur est obligatoire";

        //---------------------------------------------------------------------------------
        //---------------------------------------------------------------------------------
        //---------------------------------------------------------------------------------
    }
    if (count($erreurs) == 0) {
        $nvlivre = new Livre();
        $nvlivre->setTitre($_POST['titre']);
        $nvlivre->setNbPage($_POST['nbpage']);
        $nvlivre->setAuteur($_POST['auteur']);


        $entityManager = require_once __DIR__ . "/../../config/bootstrap.php";
        $entityManager->persist($nvlivre); // n'existe pas directement le insert mais le prépare juste
        $entityManager->flush();

    }
}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un livre</title>
</head>
<body>

<?php
?>

<div class="mt-5 mb-5">
    <div>
        <div class="container">
            <h1 class="text-center text-danger border border-1 border-danger">Ne marche pas encore</h1>
            <div class="w-50 mx-auto shadow p-4 my-5">


                <form action="" method="POST" novalidate>

                    <h1 class="mb-5 text-center">Ajouter votre livre : </h1>

<?php
                    //---------------------------------------------------------------------------------
                    //---------------------------------------------------------------------------------
                    //---------------------------------------------------------------------------------
?>

                    <div class="mb-3">
                        <label for="titre" class="form-label text-white">titre du film</label>
                        <input
                            type="text"
                            class="form-control <?= isset($erreurs['titre']) ? "border border-2 border-danger" : "" ?>"
                            id="titre"
                            name="titre"
                            value="<?= $titre ?>"
                            placeholder="Saisir le titre du livre"
                        >
                        <?php if (isset($erreurs['titre'])) : ?>
                            <p class="form-text text-danger"><?= $erreurs['titre'] ?></p>
                        <?php endif; ?>
                    </div>


                    <?php
                    //---------------------------------------------------------------------------------
                    //---------------------------------------------------------------------------------
                    //---------------------------------------------------------------------------------
                    ?>


                    <div class="mb-3">
                        <label for="nbpage" class="form-label text-white">nombre de page du livre</label>
                        <input
                            type="text"
                            class="form-control <?= isset($erreurs['nbpage']) ? "border border-2 border-danger" : "" ?>"
                            id="nbpage"
                            name="nbpage"
                            value="<?= $nbpage ?>"
                            placeholder="Saisir le nombre de page du livre"
                        >
                        <?php if (isset($erreurs['nbpage'])) : ?>
                            <p class="form-text text-danger"><?= $erreurs['nbpage'] ?></p>
                        <?php endif; ?>
                    </div>


                    <?php
                    //---------------------------------------------------------------------------------
                    //---------------------------------------------------------------------------------
                    //---------------------------------------------------------------------------------
                    ?>


                    <div class="mb-3">
                        <label for="auteur" class="form-label text-white">auteur du livre</label>
                        <input
                            type="text"
                            class="form-control <?= isset($erreurs['auteur']) ? "border border-2 border-danger" : "" ?>"
                            id="auteur"
                            name="auteur"
                            value="<?= $auteur ?>"
                            placeholder="Saisir le auteur du livre"
                        >
                        <?php if (isset($erreurs['auteur'])) : ?>
                            <p class="form-text text-danger"><?= $erreurs['auteur'] ?></p>
                        <?php endif; ?>
                    </div>

                    <?php
                    //---------------------------------------------------------------------------------
                    //---------------------------------------------------------------------------------
                    //---------------------------------------------------------------------------------
                    ?>





                    <button type="submit" class="btn btn-outline-danger mt-4">Créer le film</button>
                </form>

                <a href="index.php?route=livre-list" class="btn btn-success mt-3 text-center">Retour à la liste des films</a>
            </div>
        </div>
    </div>
</div>



</body>
</html>
