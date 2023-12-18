<?php


class AProposController {
public function handle() {

    include_once "./modules/a-propos/view-a-propos.php";
    $view = new AProposView();
    $view->render();
}
}

?>
