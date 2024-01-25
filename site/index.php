<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tower Defense</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./images/tower.png" type="image/x-icon">
    <link rel="shortcut icon" href="./images/tower.png" type="image/x-icon">

</head>
<body>
<?php

define('MY_APP', true);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include_once "header.php";


if (isset($_GET['module'])) {
    $module = $_GET['module'];

    switch ($module) {
        case 'inscription':
            include_once "modules/inscription/cont-inscription.php";
            $controller = new InscriptionController();
            $controller->handle();
            break;

        case 'connexion':
            include_once "modules/connexion/cont-connexion.php";
            $controller = new ControleurConnexion();
            $controller->handle();
            break;

        case 'mes-parties':

            include_once "./modules/mes-parties/cont-mes-parties.php";
            $controller = new MesPartiesController();
            $controller->handle();
            break;

        case 'classement':
            include_once "./modules/classement/cont-classement.php";
            $controller = new ClassementController();
            $controller->handle();
            break;

        case 'a-propos':
            include_once "./modules/a-propos/cont-a-propos.php";
            $controller = new AProposController();
            $controller->handle();
            break;

        case 'notre-jeu':
            include_once "./modules/notre-jeu/cont-notre-jeu.php";
            $controller = new NotreJeuController();
            $controller->handle();
            break;

        case 'cartes':
            include_once "./modules/notre-jeu/cartes/cont-map.php";
            $controller = new ContMap();
            $controller->view();
            break;

        case 'ennemis':
            include_once "./modules/notre-jeu/ennemis/cont-ennemis.php";
            $controller = new EnnemisController();
            $controller->handle();
            break;

        case 'tours':
            include_once "./modules/notre-jeu/tours/cont-tours.php";
            $controller = new ToursController();
            $controller->handle();
            break;

        case 'chercher':
            include_once "./modules/chercher/cont-chercher.php";
            $controller = new ChercherController();
            $controller->handle();
            break;


        default:
            echo "Aucun module détecté";
            break;
    }
} else {

    echo "Bienvenue sur la page d'accueil de Tower Defense";
}

include_once "footer.php";
?>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
