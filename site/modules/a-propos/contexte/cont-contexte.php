<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class ContexteController {
    public function handle() {

        include_once "./modules/a-propos/contexte/view-contexte.php";
        $view = new ContexteView();
        $view->render();
    }
}

?>
