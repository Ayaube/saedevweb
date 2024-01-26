<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}


class DeleteController {
    public function handle() {

        include_once "./modules/delete/mod-delete.php";
        $model = new ModDelete();
        $data = $model->getUser();

        include_once "./modules/delete/view-delete.php";
        $view = new DeleteView();
        $view->render($data);
    }
}


?>