<?php
if (!defined('MY_APP')) {
    exit('Accès non autorisé');
}
require_once __DIR__ . '/../connexionBD/connxionBD.php';

class ModDelete extends Connexion {

    public function getUser() {
        $stmt = self::$bdd->prepare("SELECT username,email,role FROM Joueur");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteUser($user) {
        self::$bdd->beginTransaction();

        $stmt = self::$bdd->prepare("DELETE FROM Partie WHERE id_joueur = (SELECT id_joueur FROM Joueur WHERE username = :user)");
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);
        $stmt->execute();

        $stmt = self::$bdd->prepare("DELETE FROM Joueur WHERE username=:user ");
        $stmt->bindParam(':user',$user,PDO::PARAM_STR);
        $stmt->execute();

        self::$bdd->commit();
        return true;
    }
}
?>
