<?php
if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class EnnemisController {
public function handle() {

    include_once "./modules/notre-jeu/ennemis/view-ennemis.php";
    $view = new EnnemisView();
    $view->render();
}
}

?>
