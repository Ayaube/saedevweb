<?php

// modules/classement/ClassementModel.php
require_once './modules/connexionBD/connxionBD.php';
class ClassementModel extends Connexion {
    
    public function getData() {
        try{
            $stmt = self::$bdd->prepare('SELECT Joueur.username, joueur_partie.map, joueur_partie.vague_atteinte, joueur_partie.ennemis_tue, joueur_partie.argent_gagne
FROM (
    SELECT Partie.id_joueur, Partie.map, Partie.vague_atteinte, Partie.ennemis_tue, Partie.argent_gagne
    FROM Partie
    INNER JOIN (
        SELECT id_joueur, MAX(argent_gagne) AS max_argent
        FROM Partie
        GROUP BY id_joueur
    ) AS max_argent_partie
    ON Partie.id_joueur = max_argent_partie.id_joueur
    AND Partie.argent_gagne = max_argent_partie.max_argent
) AS joueur_partie
INNER JOIN Joueur ON joueur_partie.id_joueur = Joueur.id_joueur
ORDER BY joueur_partie.argent_gagne DESC;
');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            die('Erreur lors de la recuperation du classement : ' . $e->getMessage());
        }
    }
}

?>
