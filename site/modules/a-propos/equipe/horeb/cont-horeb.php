<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class HorebController {
    public function handle() {

        include_once "./modules/a-propos/equipe/horeb/view-horeb.php";
        $view = new HorebView();
        $view->render();
    }
}

?>
