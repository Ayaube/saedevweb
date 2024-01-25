<?php

require_once 'mod-tours.php';
require_once 'view-tours.php';
class ToursController {
    public function handle() {
        $modTours = new ModTours();
        $descriptions = [];
        $titre = [];

        // Exemple : récupérer la description pour chaque ennemi
        for ($i = 0; $i < 5; $i++) {
            $desc = $modTours->getDesc($i . '.png');
            $ti = $modTours->getTitle($i.'.png');
            if (!empty($desc)) {
                $descriptions[$i . '.png'] = $desc[0]['description'];
            }
            if(!empty($ti)){
                $titre[$i . '.png'] = $ti[0]['nom_tourelle'];
            }
        }

        $view = new ToursView($descriptions,$titre);
        $view->render();
    }


}

?>
