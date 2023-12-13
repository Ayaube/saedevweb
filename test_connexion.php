<?php
// Chemin vers la base de données SQLite
$dbPath = 'bdsae.sqllite';

// Créer une connexion
$conn = new SQLite3($dbPath);

// Vérifier la connexion
if (!$conn) {
    die("La connexion a échoué : " . $conn->lastErrorMsg());
} else {
    echo "Connecté avec succès à la base de données SQLite<br>";
}

// Exécution de la requête SELECT
$selectQuery = "SELECT id, nom, age, email FROM test";
$result = $conn->query($selectQuery);

if ($result) {
    echo "Données récupérées de la table 'test' :<br>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nom</th><th>Age</th><th>Email</th></tr>";
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
        echo "<td>" . htmlspecialchars($row['age']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    die("Erreur lors de l'exécution de la requête SELECT : " . $conn->lastErrorMsg());
}

// Fermer la connexion
$conn->close();
?>
