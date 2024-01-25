<?php
if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
require_once './modules/connexionBD/connxionBD.php';

class InscriptionModel extends Connexion {

    public function checkUsernameExists($username) {
        // Utilisez $this->bdd qui est hérité de la classe Connexion
        $stmt = self::$bdd->prepare('SELECT id_joueur FROM Joueur WHERE username = :username');
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch() ? true : false;
    }

    public function registerUser($username, $email, $passwordHash) {
        $stmt = self::$bdd->prepare('INSERT INTO Joueur (username, email, passw_hash) VALUES (:username, :email, :passw_hash)');
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':passw_hash', $passwordHash);
        return $stmt->execute();
    }
}

?>
