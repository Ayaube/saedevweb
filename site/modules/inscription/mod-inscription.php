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
        $stmt = self::$bdd->prepare("INSERT INTO Joueur (username, email, passw_hash,role) VALUES (:username, :email, :passw_hash,'user')");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':passw_hash', $passwordHash);
        return $stmt->execute();
    }

    public function deleteUser (){
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
            exit('Accès refusé.');
        }

        if (isset($_POST['delete_user'])) {
            $user_id_to_delete = $_POST['user_id'];

            // Suppression de l'utilisateur
            $stmt = self::$bdd->prepare("DELETE FROM users WHERE user_id = :user_id");
            $stmt->bindParam(':user_id', $user_id_to_delete, PDO::PARAM_INT);
            $success = $stmt->execute();

            if ($success) {
                echo "L'utilisateur a été supprimé.";
            } else {
                echo "Erreur lors de la suppression de l'utilisateur.";
            }
        }
    }
}

?>
