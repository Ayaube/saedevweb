<?php

require_once 'mod-tours.php';
require_once 'view-tours.php';
class ToursController {
    public function handle() {
        $modTours = new ModTours();
        $descriptions = [];
        $titre = [];
        $ram = [];
        $flops = [] ;

        // Exemple : récupérer la description pour chaque ennemi
        for ($i = 0; $i < 6; $i++) {
            $desc = $modTours->getDesc($i . '.png');
            $ti = $modTours->getTitle($i.'.png');
            $r = $modTours->getRam($i.'.png');
            $f = $modTours->getFlops($i.'.png');
            if (!empty($desc)) {
                $descriptions[$i . '.png'] = $desc[0]['description'];
            }
            if(!empty($ti)){
                $titre[$i . '.png'] = $ti[0]['nom_tourelle'];
            }
            if(!empty($r)){
                $ram[$i . '.png'] = $r[0]['prix_ram'];
            }
            if(!empty($f)){
                $flops[$i . '.png'] = $f[0]['prix_flops'];
            }
        }

        $view = new ToursView($descriptions,$titre,$ram,$flops);
        $view->render();
    }


}

?>
