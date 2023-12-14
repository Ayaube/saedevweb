<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tower Defense</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
        #InitConnexion
    ?>

<?php
include_once "header.php";
?>

    <?php
        if(isset($_GET['module'])){
            switch ($_GET['module']) {
                case 'register':
                    include_once "./modules/register/module_register.php";
                    new ModRegister();
                    break;
                case 'login':
                    include_once "./modules/login/module_login.php";
                    new ModLogin();
                    break;
                default:
                    echo "aucun module detécté";
                    break;
            }
        }else{
            echo "aucun module detécté";
        }
    ?>

<div class="content-wrapper">
    <!-- Tout votre contenu ici -->
</div>

<?php
include_once "footer.php";
?>


<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
