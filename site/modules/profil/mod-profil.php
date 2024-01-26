<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

require_once './modules/connexionBD/connxionBD.php';

class ProfilModel extends Connexion {
    public function getData($pseudo)
    {
        try {
            $sql = 'SELECT map,vague_atteinte,ennemis_tue,argent_gagne FROM Partie NATURAL JOIN Joueur WHERE username=:pseudo ORDER BY argent_gagne DESC';
            $stmt = self::$bdd->prepare($sql);
            $stmt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
            $stmt->execute();
            $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $details;
        } catch (PDOException $e) {
            die('Erreur lors de la récupération des détails de la partie : ' . $e->getMessage());

        }
    }
}

?>
