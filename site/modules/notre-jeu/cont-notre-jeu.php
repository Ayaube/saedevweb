<?php


class NotreJeuController {
public function handle() {

    include_once "./modules/notre-jeu/view-notre-jeu.php";
    $view = new NotreJeuView();
    $view->render();
}
}

?>
