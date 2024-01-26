<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class AyoubController {
    public function handle() {

        include_once "./modules/a-propos/equipe/ayoub/view-ayoub.php";
        $view = new AyoubView();
        $view->render();
    }
}

?>
