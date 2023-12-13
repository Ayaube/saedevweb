<?php
// Chemin vers la base de données SQLite
$dbPath = 'bdsae.sqlite';

// Créer une connexion
$conn = new SQLite3($dbPath);

// Vérifier la connexion
if (!$conn) {
    die("La connexion a échoué : " . $conn->lastErrorMsg());
} else {
    echo "Connecté avec succès à la base de données SQLite";
}

// Fermer la connexion
$conn->close();
?>
