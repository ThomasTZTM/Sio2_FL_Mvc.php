<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////// AFFICHAGE HTML CSS ////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>MVC.PHP - Acceuil</title>
</head>
<body class="">
<div class="jumbotron text-center my-4 mt-5 mb-5">
    <h1 class="display-4">📕​ Cours <span class="text-danger">MVC.PHP</span> façon ORM</h1>
</div>
<hr class="my-4 opacity-75 container">

<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////// CONFIGURATION //////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

<?php
// Toute les requête des utilisateur passe par ce fichier
require_once __DIR__ . '/../vendor/autoload.php';
?>


<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////// LE ROUTING ///////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<div class="container">


    <?php
    // Mise en place du routing
    $route = $_GET['route'] ?? 'acceuil';
    // Tester la valeur de $route
    switch ($route) {

        case 'acceuil':
            $acceuilController = new \App\Controllers\AcceuilController();
            $acceuilController->acceuil();
            break;

        case 'livre-list' :
            // Livre DAO est une dépendence de Livre Controller
            // Injecter la dépendence $livreDAO dans l'objet controleur
            $livreController = new \App\Controllers\LivreController;
            $livreController->list();
            break;

        case 'livre-detail':
            // Livre DAO est une dépendence de Livre Controller
            $iddulivre = $_GET['idLivre'] ?? 'null';
            $acceuilController = new \App\Controllers\LivreController;
            if (is_numeric($iddulivre)) {
                $acceuilController->detail($iddulivre);
            }else{
                echo "<script>alert('ID du livre non défini.');</script>";
                echo "<script>window.location.replace('index.php?route=livre-list');</script>";
                exit;
            }
            break;

        case 'livre-ajout':
            $acceuilController = new \App\Controllers\LivreController;
            $acceuilController->ajout();
            break;

        default:
            // Erreur 404
            echo "❗​ Erreur 404 : Page non trouvé";
            break;
    }
    ?>



</div>
<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////// FIN /////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

</body>
</html>
