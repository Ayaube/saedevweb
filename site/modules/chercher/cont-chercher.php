<?php


// Votre fichier ChercherController actuel

include_once "./modules/chercher/mod-chercher.php"; // Ajouter le modèle de recherche
include_once "./modules/chercher/view-chercher.php";

class ChercherController {
    public function handle() {
        $model = new ChercherModel();
        $view = new ChercherView();

        if (isset($_GET['pseudo']) && !empty($_GET['pseudo'])) {
            $pseudo = $_GET['pseudo'];
            $data = $model->chercherPartiesJoueur($pseudo);
            $view->render($data);
        } else {
            $view->render();
        }
    }
}



?>
