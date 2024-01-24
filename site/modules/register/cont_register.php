<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
    include_once "vue_register.php";
    include_once "modele_register.php";

    class ControleurRegister{
        public $vue;

        public $modele;

        public $action;

        public function __construct() {
            $this->vue = new VueRegister();
            //$this->modele = new ModeleRegister();
            if (isset($_GET['action'])) {
                $this->action = $_GET['action'];
            }else{
                $this->action = 'register';
            }
        }
    }
?>