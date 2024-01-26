<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class ProfilController {

    public function handle() {

        include_once "./modules/profil/mod-profil.php";
        $model = new ProfilModel();
        $data = $model->getData($_SESSION['user']);

        include_once "./modules/profil/view-profil.php";
        $view = new ProfilView();
        $view->render($data);

    }
}

?>