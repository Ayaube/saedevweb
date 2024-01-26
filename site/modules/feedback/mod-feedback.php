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

    public function getFeedback (){
        try{
            $stmt = self::$bdd->prepare('SELECT username,commentaire,date_feedback FROM Feedback NATURAL JOIN Joueur');
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e){
            die('Erreur lors de la recuperation des feedbacks : ' . $e->getMessage());
        }
    }

    public function getRole($name) {
        $stmt = self::$bdd->prepare("SELECT role FROM Joueur WHERE username=:name");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['role'] : null;
    }
}


?>
