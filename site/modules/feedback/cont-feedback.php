<?php

if (!defined('MY_APP')) {
    exit('Accès non autorisé');
}

include_once 'view-feedback.php';
include_once 'mod-feedback.php';

class ContFeedback {
    private $vue;
    private $modele;

    public function __construct() {
        $this->vue = new ViewFeedback();
        $this->modele = new ModFeedback();
    }

    public function handle() {
        // Vérifiez si l'utilisateur est connecté avant de soumettre un feedback
        if (isset($_SESSION['user'])) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['commentaire'])) {
                $username = $_SESSION['user'];
                $commentaire = $_POST['commentaire'];
                $result = $this->modele->saveFeedback($username, $commentaire);
                $this->vue->afficherResultat($result);
            } else {
                // Afficher le formulaire de feedback
                $this->vue->afficherForm();
            }
        } else {
            // L'utilisateur n'est pas connecté, invitez-le à se connecter
            $this->vue->demanderConnexion();
        }
    }
}

?>