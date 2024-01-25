<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class ChercherView {
    public function render($data = null) {
        include_once "header.php";
        ?>

        <!-- Barre de recherche -->
        <div class="search-bar">
            <form action="index.php" method="get">
                <input type="hidden" name="module" value="chercher">
                <input type="text" name="pseudo" placeholder="Rechercher un joueur par pseudo">
                <button type="submit">Rechercher</button>
            </form>
        </div>

        <?php
        if (!empty($data)) {
            // Vérifier si le résultat est un tableau de tableaux (plusieurs parties)
            if (array_keys($data) !== range(0, count($data) - 1)) {
                $data = [$data];
            }

            if (count($data) > 0) {
                echo '<table class="table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col">Partie</th>';
                echo '<th scope="col">Pseudo</th>';
                echo '<th scope="col">Map</th>';
                echo '<th scope="col">Vague atteinte</th>';
                echo '<th scope="col">Ennemis Tués</th>';
                echo '<th scope="col">Argent gagné</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                $i = 1;
                foreach ($data as $row) {
                    echo '<tr class="' . ($i === 1 ? 'table-success' : '') . '">';
                    echo '<th scope="row">' . $i++ . '</th>';
                    echo '<td>' . htmlspecialchars($row['username'], ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td>' . htmlspecialchars($row['map'], ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td>' . htmlspecialchars($row['vague_atteinte'], ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td>' . htmlspecialchars($row['ennemis_tue'], ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td>' . htmlspecialchars($row['argent_gagne'], ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            }
        } else {
            // Aucune recherche effectuée ou aucun pseudo spécifié
            echo "<p class='no-results-message'>Aucun résultat trouvé pour le pseudo spécifié.</p>";
        }

        include_once "footer.php";
    }
}
?>





