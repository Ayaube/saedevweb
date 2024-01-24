<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}


include_once "./modules/chercher/mod-chercher.php";
include_once "./modules/chercher/view-chercher.php";

class ChercherController {
    public function handle() {
        $model = new ChercherModel();
        $view = new ChercherView();

        if (isset($_GET['pseudo']) && !empty($_GET['pseudo'])) {
            $pseudo = $_GET['pseudo'];
            $data = $model->chercherPartiesJoueur($pseudo);
            $view->render($data);
        } else {
            $view->render();
        }
    }
}



?>
