<?php
session_start();

if (!defined('MY_APP')) {
    exit('Accès non autorisé');
}

require_once './modules/connexion/mod-connexion.php';
require_once './modules/connexion/view-connexion.php';

class ConnexionController {
    public function handle() {
        $model = new ConnexionModel();
        $view = new ConnexionView();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            if (empty($username) || empty($password)) {
                $_SESSION['error_message'] = 'Veuillez remplir tous les champs.';
                $view->render();
                return;
            }

            if ($model->checkCredentials($username, $password)) {
                $_SESSION['user'] = $username;
                header('Location: index.php');
                exit;
            } else {
                $_SESSION['error_message'] = 'Identifiants incorrects.';
                $view->render();
                return;
            }
        } else {
            $view->render();
        }
    }
}

?>
