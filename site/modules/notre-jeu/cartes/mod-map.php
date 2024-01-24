<?php
Class ModMap {

    private $tileSize = 32;

    public function getMap($mapNumber) {
        // Chemin vers les fichiers .CSV
        $csvFile = './csv/' . 'map'. $mapNumber . '.csv';
        $rows = $this->readCSV($csvFile);

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

    private function readCSV($file) {
        $rows = [];
        if (($handle = fopen($file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $rows[] = $data;
            }
            fclose($handle);
        }
        return $rows;
    }

    private function getTileImage($tileNumber) {
        $tilePath = './images/tiles/' . $tileNumber . '.png';
        return imagecreatefrompng($tilePath);
    }
}

?>