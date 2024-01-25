<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
require_once './modules/connexionBD/connxionBD.php';

Class ModMap extends Connexion {

    private $tileSize = 32;

    public function __construct() {
        parent::__construct();
    }

    public function getMap($mapNumber) {
        $mapData = $this->getMapDataFromDB($mapNumber);
        $rows = array_map('str_getcsv', explode("\n", $mapData));

        // Création de l'image
        $mapWidth = count($rows[0]);
        $mapHeight = count($rows);
        $mapImage = imagecreatetruecolor($mapWidth * $this->tileSize, $mapHeight * $this->tileSize);

        // Assemblage de la carte
        foreach ($rows as $y => $row) {
            foreach ($row as $x => $tile) {
                $tileImage = $this->getTileImage($tile);
                imagecopy($mapImage, $tileImage, $x * $this->tileSize, $y * $this->tileSize, 0, 0, $this->tileSize, $this->tileSize);
                imagedestroy($tileImage);
            }
        }

        // Sauvegarde de l'image
        $outputPath = './images/cartes-générées/' . $mapNumber . '.png';
        imagepng($mapImage, $outputPath);
        imagedestroy($mapImage);

        return $outputPath;
    }

    private function getMapDataFromDB($mapId) {
        $sql = 'SELECT matrix FROM Map WHERE id_map = :mapId';
        $stmt = self::$bdd->prepare($sql);
        $stmt->bindParam(':mapId', $mapId, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['matrix'] ?? null;
    }

    private function getTileImage($tileNumber) {
        $tilePath = './images/tiles/' . $tileNumber . '.png';
        return imagecreatefrompng($tilePath);
    }
}

?>