<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class ViewMap {
    public function afficher($da) {

        echo '<form action="" method="post">';
        for ($i = 1; $i <= 5; $i++) {
            echo '<button type="submit" name="mapNumber" value="' . ($i - 1) . '" id="btn-carte-' . $i . '" class="carte-btn">Carte ' . $i . '</button>';
        }
        echo '</form>';


        if ($da) {
            echo '<img src="' . $da . '" alt="Carte générée" width="500" height="500" id="map-image">';
        }
    }
}


?>