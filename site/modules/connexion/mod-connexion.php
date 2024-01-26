<?php
if (!defined('MY_APP')) {
    exit('Accès non autorisé');
}
require_once './modules/connexionBD/connxionBD.php';

class ConnexionModel extends Connexion {

    function checkCSRFToken(){
        if(isset($_POST['csrf_token'])) {
            $user_token = $_POST['csrf_token'];
            if($user_token === $_SESSION['csrf_token']) {
                echo "ok";
                return true;
            } else {
                echo "Erreur : Jeton CSRF non valide.";
                return false;
            }
            unset($_SESSION['csrf_token']);
        } else {
            echo "Erreur : Jeton CSRF manquant dans la requête.";
            return false;
        }
    }

    public function checkCredentials($username, $password) {
        $stmt = self::$bdd->prepare('SELECT username, passw_hash FROM Joueur WHERE username = :username');
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['passw_hash'])) {
            if ($this->checkCSRFToken()){
                return true;
            }
        }

        return false;
    }

    
}
?>
