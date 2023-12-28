<?php


class CartesController {
public function handle() {

    include_once "./modules/notre-jeu/cartes/view-cartes.php";
    $view = new CartesView();
    $view->render();
}
}

?>
