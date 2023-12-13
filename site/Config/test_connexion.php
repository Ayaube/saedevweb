<?php
// Inclure le fichier de configuration
global $dbConfig;
require 'config-connexion-bd.php';


$servername = $dbConfig['servername'];
$username = $dbConfig['username'];
$password = $dbConfig['password'];
$dbname = $dbConfig['dbname'];

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
echo "Connecté avec succès à la base de données";

// Fermer la connexion
$conn->close();
?>
