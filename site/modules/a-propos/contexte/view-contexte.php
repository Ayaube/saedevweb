<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class ContexteView {
    public function render() {
        include_once "header.php";
        ?>
        <div class="card">
            <div class="card-body bg-light">
                <p> Le jeu se déroule dans un ordinateur où des programmes et fichiers corrompus (<a href="index.php?module=ennemis" style="color: black;">Ennemis</a>) s’en prennent à nos données personnelles présentent sur notre Disque Dur (Vie). </p>
                <p> Pour contrer ces ennemis, nous avons à disposition des Logiciels et Applications de défense (<a href="index.php?module=tours" style="color : black">Tourelles</a>) </p>
                <p> Ces attaques sont sous la forme de vagues successives à surmonter. Chaque vague étant plus forte que la précédente. Le but du jeu est donc de survivre le plus longtemps possible.
                    Le circuit imprimé (Map) sera le lieu où se déroulera la bataille. Le point rouge est l’endroit d’où sortent les ennemies, et l’autre extrémité de la map leur objectif :  <a href="index.php?module=cartes" style="color: black;"> voici les différentes maps disponibles</a>

                </p>
                ...
            </div>
        </div>

        <?php
        include_once "footer.php";
    }
}



?>