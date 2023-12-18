<?php


class NotreJeuView {
    public function render() {

        include_once "header.php";
        ?>
        <div class="espace-haut"></div>

        <div class="content-wrapper">
            <div class="content-block" id="block1">
                <h2>Comment jouer ?</h2>
                <p>Texte du Bloc 1...</p>
            </div>
        </div>

        <?php
        include_once "footer.php";
    }
}


?>