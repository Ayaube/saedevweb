<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class LucasController {
    public function handle() {

        include_once "./modules/a-propos/equipe/lucas/view-lucas.php";
        $view = new LucasView();
        $view->render();
    }
}

?>
