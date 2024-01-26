<?php

if (!defined('MY_APP')) {
    exit('Accès non autorisé');
}

class ViewFeedback {
    public function afficherForm() {
        echo '<div class="feedback-container">
            <h2>Soumettre un feedback</h2>
            <form action="index.php?module=feedback" method="post" class="feedback-form">
                <div class="mb-3">
                    <label for="commentaire" class="form-label feedback-form-label">Votre Feedback:</label>
                    <textarea class="form-control feedback-form-textarea" id="commentaire" name="commentaire" rows="3" required></textarea>
                </div>
                <button type="submit" class="feedback-submit-btn">Soumettre</button>
            </form>
          </div>';
    }

    public function afficherResultat($result) {
        if ($result) {
            echo '<div class="container mt-3"><div class="alert alert-success" role="alert">Merci pour votre feedback!</div></div>';
        } else {
            echo '<div class="container mt-3"><div class="alert alert-danger" role="alert">Erreur lors de la soumission du feedback.</div></div>';
        }
    }

    public function demanderConnexion() {
        echo '<div class="container mt-3"><div class="alert alert-warning" role="alert">
                Veuillez vous <a href="index.php?module=connexion" class="alert-link">connecter</a> pour soumettre un feedback.
              </div></div>';
    }
}


?>
