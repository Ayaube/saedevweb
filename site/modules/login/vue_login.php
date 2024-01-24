<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
    class VueLogin{
        public function __construct() {

        }
        public function showLoginForm(){
            include_once "login_form.php";
        }
    }
?>