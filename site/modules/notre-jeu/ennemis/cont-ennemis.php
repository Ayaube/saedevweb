<?php

require_once 'mod-ennemis.php';
require_once 'view-ennemis.php';
class EnnemisController {
    public function handle() {
        $modEnnemis = new ModEnnemis();
        $descriptions = [];
        $names = [];

        // Exemple : récupérer la description pour chaque ennemi
        for ($i = 0; $i < 6; $i++) {
            $desc = $modEnnemis->getDesc($i . '.png');
            $nom = $modEnnemis->getNom($i . '.png');
            if (!empty($desc)) {
                $descriptions[$i . '.png'] = $desc[0]['description'];
            }
            if (!empty($nom)) {
                $names[$i . '.png'] = $nom[0]['nom_ennemi'];
            }
        }

        $view = new EnnemisView($descriptions,$names);
        $view->render();
    }


}

?>
