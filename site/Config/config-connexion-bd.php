<?php

// Fichier config-connexion-bd.php

class DatabaseConfig {
    private $servername = "ayoublsae.mysql.db";
    private $username = "ayoublsae";
    private $password = "Saedevweb2023";
    private $dbname = "ayoublsae";

    public function connect() {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error) {
            die("La connexion a échoué : " . $conn->connect_error);
        }

        return $conn;
    }
}

?>
