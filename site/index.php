<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tower Defense</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Inclusion du fichier de config reseau

include_once "header.php";


if (isset($_GET['module'])) {
    $module = $_GET['module'];

    switch ($module) {
        case 'register':
            include_once "modules/register/cont_register.php";
            $controller = new RegisterController();
            $controller->handle();
            break;

        case 'login':
            include_once "modules/login/cont_login.php";
            $controller = new ControleurLogin();
            $controller->__construct();
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
