<?php if (!defined('MY_APP')) { exit('Accès non autorisé'); }

class ChangerMdpView {
public function render() {

if (isset($_SESSION['error_message'])) {
    echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error_message'] . '</div>';
    unset($_SESSION['error_message']);
} elseif (isset($_SESSION['success_message'])) {
    echo '<div class="alert alert-success" role="alert">' . $_SESSION['success_message'] . '</div>';
    unset($_SESSION['success_message']);
}
?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Changer de mot de passe</h4>
            </div>
            <div class="card-body">
                <form action="index.php?module=changer-mdp" method="post">
                    <div class="mb-3">
                        <label for="new-mdp" class="form-label">Nouveau mot de passe</label>
                        <input type="password" class="form-control" id="new-mdp" name="new-mdp" required>
                    </div>
                    <div class="mb-3">
                        <label for="new-mdp-confirm" class="form-label">Confirmez nouveau mot de passe</label>
                        <input type="password" class="form-control" id="new-mdp-confirm" name="new-mdp-confirm" required>
                    </div>
                    <?php
                    echo "<input type=\"hidden\" name=\"csrf_token\" value=\"" . $_SESSION['csrf_token'] . "\">";
                    ?>

                    <button type="submit" class="btn btn-primary">Changer de mot de passe</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

    <?php
}
}
?>