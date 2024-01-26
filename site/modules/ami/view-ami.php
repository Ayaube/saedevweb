<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class AmiView {
    public function render($data = null) {
        include_once "header.php";
        ?>

        <!-- Barre de recherche -->
        <div class="search-bar">
            <form action="search_user.php" method="get">
                <input type="hidden" name="module" value="chercher">
                <input type="text" name="pseudo" placeholder="Rechercher un joueur par pseudo">
                <button type="submit">Rechercher</button>
            </form>
        </div>

        <?php
        include_once "footer.php";
    }
}
?>





