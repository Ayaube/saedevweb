<?php 
    include_once "cont_register.php";

    class ModRegister
    {
        public $controleurRegister;
        
        public function __construct() {
            $this->controleurRegister = new ControleurRegister();

            switch ($this->controleurRegister->action) {
                case 'register':
                    $this->controleurRegister->vue->showRegisterForm();
                    break;
                
                default:
                    echo "Error";
                    break;
            }
        }
    }
?>