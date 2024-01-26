<?php
if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class NotreJeuView {
    public function render() {
        include_once "header.php";
        ?>

        <div class="content-wrapper" id="notre-jeu">
            <a href="index.php?module=ennemis" class="column-link">
                <div class="column" id="ennemis">
                    <h2>Ennemis</h2>
                </div>
            </a>
            <a href="index.php?module=cartes" class="column-link">
                <div class="column" id="cartes">
                    <h2>Cartes</h2>
                </div>
            </a>
            <a href="index.php?module=tours" class="column-link">
                <div class="column" id="tours">
                    <h2>Tours</h2>
                </div>
            </a>
        </div>

        <?php
        include_once "footer.php";
    }
}



?>