<?php


class EnnemisController {
public function handle() {

    include_once "./modules/notre-jeu/ennemis/view-ennemis.php";
    $view = new EnnemisView();
    $view->render();
}
}

?>
