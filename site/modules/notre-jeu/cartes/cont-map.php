<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

include_once 'vue-map.php';
include_once 'mod-map.php';

class ContMap {
    private $vue;
    private $modele;

    public function __construct() {
        $this->vue = new ViewMap();
        $this->modele = new ModMap();
    }

    public function view() {
        $mapImage = null;
        if (isset($_POST['mapNumber'])) {
            $mapNumber = $_POST['mapNumber'];
            $mapImage = $this->modele->getMap($mapNumber);
        }
        $this->vue->afficher($mapImage);
    }
}

?>
