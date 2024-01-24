<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
    include_once "cont_login.php";

    class ModLogin
    {
        public $controleurLogin;
        
        public function __construct() {
            
            $this->controleurRegister = new ControleurLogin();
            echo "ACTION : ".$this->controleurRegister->action;
            switch ($this->controleurRegister->action) {
                case 'login':
                    $this->controleurRegister->vue->showLoginForm();
                    break;
                
                default:
                    echo "Error";
                    break;
            }
        }
    }
?>