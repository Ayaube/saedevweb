<?php
    
    class Database{
        protected static $db;

        public static function init_con(){
            include_once "./config/config-connexion-bd.php";

            $servername = $dbConfig['servername'];
            $username = $dbConfig['username'];
            $password = $dbConfig['password'];
            $dbname = $dbConfig['dbname'];
            self::$db = new PDO($servername, $username, $password);
        }
    }
    
    
?>