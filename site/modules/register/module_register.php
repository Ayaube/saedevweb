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
                case 'register_done':
                    $this->controleurRegister->vue->showRegisterDone();
                    break;
                case 'try_register':
                    $this->controleurRegister->modele->register();
                    //header("location:index.php?module=register&action=register_done");
                
                    break;
                default:
                    echo "Error";
                    break;
            }
        }
    }
?>