<?php
if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class ToursController {
public function handle() {

    include_once "./modules/notre-jeu/tours/view-tours.php";
    $view = new ToursView();
    $view->render();
}
}

?>
