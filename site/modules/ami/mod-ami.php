<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
require_once './modules/connexionBD/connxionBD.php';

class ModAmi extends Connexion {
    public function chercherJoueur($pseudo) {
        try {
            $stmt = self::$bdd->prepare('SELECT username FROM Joueur WHERE Joueur.username = :pseudo');
            $stmt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            die('Erreur lors de la recherche du joueur : ' . $e->getMessage());
        }
    }
}


?>

