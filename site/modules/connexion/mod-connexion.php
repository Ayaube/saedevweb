<?php
if (!defined('MY_APP')) {
    exit('Accès non autorisé');
}
require_once './modules/connexionBD/connxionBD.php';

class ConnexionModel extends Connexion {

    public function checkCredentials($username, $password) {
        $stmt = self::$bdd->prepare('SELECT username, passw_hash FROM Joueur WHERE username = :username');
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['passw_hash'])) {
            if (!isset($_SESSION['csrf_token'])) {
                $_SESSION['csrf_token'] = generateCSRFToken();
            }
            return true;
        }

        return false;
    }

    
}
?>
