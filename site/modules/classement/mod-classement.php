<?php

// modules/classement/ClassementModel.php
require_once './modules/connexionBD/connxionBD.php';
class ClassementModel extends Connexion {
    
    public function getData() {
        try{
            $stmt = self::$bdd->prepare('SELECT username,map,vague_atteinte,ennemis_tue,argent_gagne FROM Partie NATURAL JOIN Joueur ORDER BY argent_gagne DESC');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            die('Erreur lors de la recuperation du classement : ' . $e->getMessage());
        }
    }
}

?>
