<?php
    class VueRegister{
        public function __construct() {

        }
        public function showRegisterForm(){
            include_once "register_form.php";
        }

        public function showRegisterDone(){
            echo "</h1>Bienvenue chez Files Attack!</h1>";
        }
    }
?>