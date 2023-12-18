<?php


class ClassementController {
    public function handle() {

        include_once "./modules/classement/mod-classement.php";
        $model = new ClassementModel();
        $data = $model->getData();

        include_once "./modules/classement/view-classement.php";
        $view = new ClassementView();
        $view->render($data);
    }
}


?>