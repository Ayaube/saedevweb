<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
    Class Connexion {
        protected static $bdd;
        public function __construct() {
            $this->connexion();
        }
        public function connexion() {
            try {
                self::$bdd = new PDO('mysql:host=localhost;dbname=saedevweb', 'root', '');            
                self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erreur de connexion à la base de données : ' . $e->getMessage());
            }
        }
        
    }
    
?>
