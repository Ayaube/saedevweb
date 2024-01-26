<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}


class AmiController {
    public function handle() {

        include_once "./modules/ami/mod-ami.php";
        $model = new ModAmi();
        $data = $model->getUser();

        include_once "./modules/ami/view-ami.php";
        $view = new AmiView();
        $view->render($data);
    }
}


?>