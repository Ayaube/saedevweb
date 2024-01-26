<?php

if (!defined('MY_APP')) {
    exit('Accès non autorisé');
}
class DeleteView {
    public function render($data) {
        include_once "header.php";
        $i = 1;
        if (isset($_GET['success']) && $_GET['success'] == 'success') {
            ?>
            <div class="alert alert-dark text-center" role="alert">
                Utilisateur supprimé avec succès !
            </div>

            <?php
        }
        ?>
        <h1 class="titre-classement fw-bold">Tous les utilisateurs</h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Pseudo</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo htmlspecialchars($row['username'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($row['role'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <form action="./modules/delete/delete_user.php" method="post">
                            <input type="hidden" name="username" value="<?= htmlspecialchars($row['username'], ENT_QUOTES, 'UTF-8') ?>">
                            <button class ="btn btn-danger"type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur?');">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php
    }
}

?>