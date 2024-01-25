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

session_start();
$_SESSION['csrf_token'] = generateCSRFToken();

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
            $controller = new ConnexionController();
            $controller->handle();
            break;

        case 'deconnexion':
            include_once "modules/deconnexion/cont-deconnexion.php";
            $controller = new DeconnexionController();
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
        case 'contexte' :
            include_once "./modules/a-propos/contexte/cont-contexte.php";
            $controller = new ContexteController();
            $controller -> handle();
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
        case 'equipe':
            include_once "./modules/a-propos/equipe/cont-equipe.php";
            $controller = new EquipeController();
            $controller->handle();
            break;
        case 'horeb':
            include_once "./modules/a-propos/equipe/horeb/cont-horeb.php";
            $controller = new HorebController();
            $controller->handle();
            break;
        case 'ayoub':
            include_once "./modules/a-propos/equipe/ayoub/cont-ayoub.php";
            $controller = new AyoubController();
            $controller->handle();
            break;
        case 'lucas':
            include_once "./modules/a-propos/equipe/lucas/cont-lucas.php";
            $controller = new LucasController();
            $controller->handle();
            break;

        default:
            echo "Aucun module détecté";
            break;
    }
} else {

    include_once "accueil.php";
}

include_once "footer.php";

function generateCSRFToken() {
    return bin2hex(random_bytes(32));
}

function checkCSRFToken(){
    if(isset($_POST['csrf_token'])) {
        $user_token = $_POST['csrf_token'];
        if($user_token === $_SESSION['csrf_token']) {
            return;
        } else {
            echo "Erreur : Jeton CSRF non valide.";
        }
        unset($_SESSION['csrf_token']);
    } else {
        echo "Erreur : Jeton CSRF manquant dans la requête.";
    }
}
?>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
