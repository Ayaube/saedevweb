<?php

// modules/a-propos/AProposView.php
class AProposView {
    public function render() {

        include_once "header.php";
        ?>
        <div class="content-wrapper">


            <div class="espace-haut"></div>


            <div class="content-block" id="block1">
                <h2>Ayoub Lamchichi</h2>
                <p>Texte du Bloc 1...</p>
            </div>

            <div class="content-block" id="block2">
                <h2>Lucas Liger</h2>
                <p>Texte du Bloc 2...</p>
            </div>

            <div class="content-block" id="block3">
                <h2>Horeb Silva</h2>
                <p>Texte du Bloc 3...</p>
            </div>

            <div class="espace-bas"></div>

        </div>
        <?php
        include_once "footer.php";
    }
}


?>