<?php

class AProposView {
    public function render() {
        include_once "header.php";
        ?>

        <div id="a-propos" class="content-wrapper">


            <a href="index.php?module=equipe" class="column-link">
                <div class="column" id="block1">
                    <h2>L'équipe</h2>
                </div>
            </a>

            <a href="index.php?module=contexte" class="column-link">
                <div class="column" id="block2">
                    <h2>Contexte</h2>
                </div>
            </a>

            <a href="index.php?module=Telecharger" class="column-link">
                <div class="column" id="block3">
                    <h2>Télécharger</h2>
                </div>
            </a>

            <div class="espace-bas"></div>

        </div>

        <?php
        include_once "footer.php";
    }
}



?>