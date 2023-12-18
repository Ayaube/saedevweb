<?php
include_once 'vue_map0.php';
include_once 'map0.php';

Class ContMap0 {
    public $vue;
    public $modele;
    public function __construct() {
        $this->vue = new ViewMap0();
        $this->modele = new Map0();
    }

    public function view() {
        $this->vue->afficher($this->modele->getMap());
    }
}

?>
