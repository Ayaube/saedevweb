<?php
// Paramètres de connexion à la base de données
$servername = "ayoublsae.mysql.db"; // ou l'adresse IP si le nom d'hôte ne fonctionne pas
$username = "ayoublsae"; // Remplacez par votre nom d'utilisateur
$password = "Saedevweb2023"; // Remplacez par votre mot de passe
$dbname = "ayoublsae"; // Remplacez par le nom de votre base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
} else {
    echo "Connecté avec succès à la base de données";
}

// Fermer la connexion
$conn->close();
?>
