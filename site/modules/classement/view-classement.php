<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
class ClassementView {
    public function render($data) {
        $i = 1;
?>
        <h1 class="titre-classement fw-bold">Classement</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Position</th>
                <th scope="col">Pseudo</th>
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
                <td><?php echo htmlspecialchars($row['username'], ENT_QUOTES, 'UTF-8'); ?></td>
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
}

?>