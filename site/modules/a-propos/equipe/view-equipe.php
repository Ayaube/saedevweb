<?php
if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class EquipeView {
    public function render() {
        include_once "header.php";
        ?>



        <?php
        include_once "footer.php";
    }
}



?>