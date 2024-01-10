<?php 
    include_once "cont_login.php";

    class ModLogin
    {
        public $controleurLogin;
        
        public function __construct() {
            
            $this->controleurLogin = new ControleurLogin();
            switch ($this->controleurLogin->action) {
                case 'login':
                    $this->controleurLogin->vue->showLoginForm();
                    break;
                
                default:
                    echo "Error";
                    break;
            }
        }
    }
?>