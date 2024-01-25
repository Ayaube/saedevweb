<?php
if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class EquipeView {
    public function render() {
        include_once "header.php";
        ?>
        <div id="a-propos" class="content-wrapper">


            <a href="index.php?module=ayoub" class="column-link">
                <div class="column" id="block1">
                    <h2>Ayoub</h2>
                </div>
            </a>

            <a href="index.php?module=horeb" class="column-link">
                <div class="column" id="block2">
                    <h2>Horeb</h2>
                </div>
            </a>

            <a href="index.php?module=lucas" class="column-link">
                <div class="column" id="block3">
                    <h2>Lucas</h2>
                </div>
            </a>

            <div class="espace-bas"></div>

        </div>


        <?php
        include_once "footer.php";
    }
}



?>