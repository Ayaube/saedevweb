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
    <link href="https://fonts.cdnfonts.com/css/hafigde" rel="stylesheet">



</head>
<body>
<?php


define('MY_APP', true);

// Force l'utilisation des cookies uniquement pour les ID de session, Active HttpOnly
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.use_only_cookies', 1);

session_start();
if(!isset($_SESSION['csrf_token'])){
    $_SESSION['csrf_token'] = generateCSRFToken();
}


// Detruit la session après 1min d'inactivité
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
    session_unset();
    session_destroy();
}
$_SESSION['LAST_ACTIVITY'] = time();

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
        case 'profil':
            include_once "./modules/profil/cont-profil.php";
            $controller = new ProfilController();
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
        case 'delete':
            include_once "./modules/delete/cont-delete.php";
            $controller = new DeleteController();
            $controller->handle();
            break;

        case 'feedback':
            include_once "./modules/feedback/cont-feedback.php";
            $controller = new ContFeedback();
            $controller->handle();
            break;
        case 'changer-mdp':
            include_once "./modules/changer-mdp/cont-changer-mdp.php";
            $controller = new ContChangerMdp();
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


?>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
