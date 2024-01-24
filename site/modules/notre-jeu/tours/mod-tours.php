<?php

require_once './modules/connexionBD/connxionBD.php';
class ModTours extends Connexion {
    public function getDesc($filename) {
        try {
            $stmt = self::$bdd->prepare('SELECT description FROM Tourelle WHERE filename=:filename');
            $stmt->bindParam(':filename', $filename,PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e){
            die('Erreur lors de la recuperation de la description : ' . $e->getMessage());
        }
    }

    public function getTitle($filename) {
        try {
            $stmt = self::$bdd->prepare('SELECT nom_tourelle FROM Tourelle WHERE filename=:filename');
            $stmt->bindParam(':filename', $filename,PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e){
            die('Erreur lors de la recuperation du titre : ' . $e->getMessage());
        }
    }
}

?>