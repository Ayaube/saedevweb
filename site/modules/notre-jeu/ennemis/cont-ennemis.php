<?php

require_once 'mod-ennemis.php';
require_once 'view-ennemis.php';
class EnnemisController {
    public function handle() {
        $modEnnemis = new ModEnnemis();
        $descriptions = [];

        // Exemple : récupérer la description pour chaque ennemi
        for ($i = 0; $i < 5; $i++) {
            $desc = $modEnnemis->getDesc($i . '.png');
            if (!empty($desc)) {
                $descriptions[$i . '.png'] = $desc[0]['description'];
            }
        }

        $view = new EnnemisView($descriptions);
        $view->render();
    }


}

?>
