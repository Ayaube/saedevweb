<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
    class VueRegister{
        public function __construct() {

        }
        public function showRegisterForm(){
            include_once "register_form.php";
        }
    }
?>