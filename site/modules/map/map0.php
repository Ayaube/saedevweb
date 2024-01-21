<?php
Class Map0 {
    public function __construct() {

    }

    public function getMap() {
        $tileWidth = 32; // Largeur d'une tuile en pixels
        $tileHeight = 32; // Hauteur d'une tuile en pixels
        $tilesetPath = './tiles/0.png'; // Chemin vers l'image du tileset
        $csvPath = './csv/map0.csv'; // Chemin vers le fichier CSV

        // Charger le tileset
        $tilesetImage = imagecreatefrompng($tilesetPath);

        // Lire le fichier CSV
        $csvFile = fopen($csvPath, 'r');
        $rows = [];
        while (($line = fgetcsv($csvFile)) !== FALSE) {
            $rows[] = $line;
        }
        fclose($csvFile);

        // Créer l'image finale
        $finalImage = imagecreatetruecolor(count($rows[0]) * $tileWidth, count($rows) * $tileHeight);

        // Dessiner les tuiles
        foreach ($rows as $y => $row) {
            foreach ($row as $x => $tileNumber) {
                $srcX = ($tileNumber % 32) * $tileWidth;
                $srcY = floor($tileNumber / 32) * $tileHeight;
                imagecopy($finalImage, $tilesetImage, $x * $tileWidth, $y * $tileHeight, $srcX, $srcY, $tileWidth, $tileHeight);
            }
        }

        $outputPath = './tiles/map0.png';
        imagepng($finalImage, $outputPath);
        imagedestroy($finalImage);
    }
}

?>