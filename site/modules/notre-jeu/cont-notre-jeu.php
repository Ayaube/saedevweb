<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
class NotreJeuController {
public function handle() {

    include_once "./modules/notre-jeu/view-notre-jeu.php";
    $view = new NotreJeuView();
    $view->render();
}
}

?>
