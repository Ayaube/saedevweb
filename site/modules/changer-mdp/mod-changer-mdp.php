<?php
if (!defined('MY_APP')) {
    exit('Accès non autorisé');
}
require_once './modules/connexionBD/connxionBD.php';

class ChangerMdpMod extends Connexion{

    function changePassword(){
        if($this->checkCSRFToken()){
            $stmt = self::$bdd->prepare('UPDATE Joueur SET passw_hash=:new_pass_hash WHERE username=:username');
            $stmt->bindParam(':username', $_SESSION['user']);
            $hash =password_hash($_POST['new-mdp-confirm'], PASSWORD_DEFAULT);
            $stmt->bindParam(':new_pass_hash', $hash);
            $stmt->execute();
            header('Location: index.php');
            exit();
        }
    }
}

?>