<?php
if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class EquipeController {
public function handle() {

    include_once "./modules/a-propos/equipe/view-equipe.php";
    $view = new EquipeView();
    $view->render();
}
}

?>
