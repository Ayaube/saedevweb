<?php
    include_once "vue_login.php";
    include_once "modele_login.php";

    class ControleurLogin{
        public $vue;

        public $modele;

        public $action;

        public function __construct() {
            $this->vue = new VueLogin();
            //$this->modele = new ModeleLogin();
            if (isset($_GET['action'])) {
                $this->action = $_GET['action'];
            }else{
                $this->action = 'login';
            }
        }
    }
?>