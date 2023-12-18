<?php

class MesPartiesController {

public function handle() {

include_once "./modules/mes-parties/mod-classement.php";
$model = new MesPartiesModel();
$data = $model->getData();

include_once "./modules/mes-parties/view-classement.php";
$view = new MesPartiesView();
$view->render($data);

}
}

?>