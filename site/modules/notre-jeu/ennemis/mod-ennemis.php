<?php

require_once './modules/connexionBD/connxionBD.php';
class ModEnnemis extends Connexion {
    public function getDesc($filename) {
        try {
            $stmt = self::$bdd->prepare('SELECT description FROM Ennemis WHERE filename=:filename');
            $stmt->bindParam(':filename', $filename,PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e){
            die('Erreur lors de la recuperation de la description : ' . $e->getMessage());
        }
    }

    public function getNom($filename) {
        try {
            $stmt = self::$bdd->prepare('SELECT nom_ennemi FROM Ennemis WHERE filename=:filename');
            $stmt->bindParam(':filename', $filename,PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e){
            die('Erreur lors de la recuperation du nom : ' . $e->getMessage());
        }
    }
}

?>