<?php


if (!defined('MY_APP')) {
    exit('Accès non autorisé');
}

require_once 'mod-changer-mdp.php';
require_once 'view-changer-mdp.php';

class ContChangerMdp {
    public function handle() {
        $model = new ChangerMdpMod();
        $view = new ChangerMdpView();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $model->changePassword();
        } else {
            $view->render();
        }
    }
}

?>
