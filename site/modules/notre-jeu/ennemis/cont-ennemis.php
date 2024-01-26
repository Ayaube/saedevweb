<?php

require_once 'mod-ennemis.php';
require_once 'view-ennemis.php';
class EnnemisController {
    public function handle() {
        $modEnnemis = new ModEnnemis();
        $descriptions = [];
        $names = [];
        $pv = [];
        $vitesse = [];
        $gain =[];

        for ($i = 0; $i < 6; $i++) {
            $desc = $modEnnemis->getDesc($i . '.png');
            $nom = $modEnnemis->getNom($i . '.png');
            $p = $modEnnemis->getPV($i . '.png');
            $v = $modEnnemis->getVitesse($i . '.png');
            $g = $modEnnemis->getGain($i . '.png');
            if (!empty($desc)) {
                $descriptions[$i . '.png'] = $desc[0]['description'];
            }
            if (!empty($nom)) {
                $names[$i . '.png'] = $nom[0]['nom_ennemi'];
            }
            if (!empty($p)) {
                $pv[$i . '.png'] = $p[0]['pv'];
            }
            if (!empty($v)) {
                $vitesse[$i . '.png'] = $v[0]['vitesse'];
            }
            if (!empty($g)) {
                $gain[$i . '.png'] = $g[0]['gain'];
            }
        }


        $view = new EnnemisView($descriptions,$names,$pv,$vitesse,$gain);
        $view->render();
    }


}

?>
