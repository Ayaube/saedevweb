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
                self::$bdd = new PDO('mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201676', 'dutinfopw201676', 'hutunyzu');            
                self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erreur de connexion à la base de données : ' . $e->getMessage());
            }
        }
    }
    
?>
