<?php

if (!defined('MY_APP')) {
    exit('Accès non autorisé');
}

require_once './modules/connexionBD/connxionBD.php';

class ModFeedback extends Connexion {
    public function saveFeedback($username, $commentaire) {
        try {
            $sql = 'INSERT INTO Feedback (id_joueur, commentaire) 
                    VALUES ((SELECT id_joueur FROM Joueur WHERE username = :username), :commentaire)';

            $stmt = self::$bdd->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':commentaire', $commentaire);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            // Gérer ou enregistrer l'erreur
            return false;
        }
    }
}


?>
