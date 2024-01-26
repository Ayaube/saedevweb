<?php

if (!defined('MY_APP')) {
    exit('Accès non autorisé');
}

class MesPartiesView {
    public function render($data) {
        include_once "header.php";
        $i = 1;

        ?>
        <h1 class="titre-classement fw-bold">Mes Parties</h1>

        <?php
        if (isset($_SESSION['role'])&&$_SESSION['role'] != 'admin') {
        ?>
        <div class="alert alert-primary" role="alert">
            Bonjour <?php echo $_SESSION['user'] ;?>,
            voici vos parties !
        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Map</th>
                <th scope="col">Vague atteinte</th>
                <th scope="col">Ennemis Tués</th>
                <th scope="col">Argent gagné</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $row): ?>
                <tr class="<?php echo ($i === 1) ? 'table-success' : ''; ?>">
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo htmlspecialchars($row['map'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($row['vague_atteinte'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($row['ennemis_tue'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($row['argent_gagne'], ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php
        }
        else if (isset($_SESSION['role'])&&$_SESSION['role'] == 'admin'){
            ?>
            <div class="alert alert-primary" role="alert">
            Bonjour <?php echo $_SESSION['user'] ;?>,
            voici vos fonctions d'administrateur !
        </div>
            <div class="text-center">
                <button type="button" class="btn btn-info" onclick="window.location.href='index.php?module=feedback';"">Voir les feedback des joueurs</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='index.php?module=delete';"">Supprimer un joueur</button>
            </div>

        <?php
        }
        else {
            echo 'Role non défini ou user non connecté';
        }

        if (isset($_SESSION['user'])){
            ?>
                <a href="index.php?module=changer-mdp">Changer votre mot de passe</a>
            <?php
        }
    }
}

?>