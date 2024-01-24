<?php

class ViewMap {
    public function afficher($da) {
        // Formulaire avec boutons pour choisir la carte
        echo '<form action="" method="post">';
        for ($i = 1; $i <= 5; $i++) {
            echo '<button type="submit" name="mapNumber" value="' . ($i - 1) . '" id="btn-carte-' . $i . '" class="carte-btn">Carte ' . $i . '</button>';
        }
        echo '</form>';

        // Afficher l'image générée si elle est passée
        if ($da) {
            echo '<img src="' . $da . '" alt="Carte générée" width="500" height="500" id="map-image">';
        }
    }
}


?>