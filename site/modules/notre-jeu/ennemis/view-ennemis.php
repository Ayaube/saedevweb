<?php
if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
class EnnemisView {
    private $descriptions;
    private $imageCount;

    public function __construct() {
        $this->descriptions = [
            '0.png' => 'Ennemi de base , dégâts simples',
            '1.png' => 'Ennemi qui se sépare en plusieurs .sh quand il meurt. Plus lent mais plus de vie',
            '2.png' => 'Ennemi assez résistant, inflige un effet de poisson au disque dur lorsqu’il le touche',
            '3.png' => 'Ennemi qui bloque le jeu en faisant apparaître une pop up si il touche le disque dur',
            '4.png' => 'N’est pas un réel ennemi, il s’agit des “ennemis” créés par le démineur. Ces ennemis font le chemin inverse et explosent au contact du premier ennemi touché ou au bout de 5 secondes. Quand il explose, des morceaux de shrapnels sont projetés pour infliger des dégâts aux ennemis',
            '5.png' => 'Ennemi plus fort que la moyenne, quand il touche le disque dur, supprime une de nos tours de manière aléatoire',
        ];
        $this->imageCount = count($this->descriptions);
    }

    public function render() {
        include_once "header.php";
        ?>

        <div id="enemyContainer">
            <button onclick="changeImage(-1)">Précédent</button>
            <button onclick="changeImage(1)">Suivant</button>
            <br>
            <img src="./images/enemy/0.png" id="currentImage" />
            <div id="imageDescription"><?php echo $this->descriptions['0.png']; ?></div>
        </div>

        <script>
            var currentImageIndex = 0;
            var imageCount = <?php echo $this->imageCount; ?>;
            var descriptions = <?php echo json_encode($this->descriptions); ?>;

            function changeImage(direction) {
                currentImageIndex += direction;
                if (currentImageIndex < 0) currentImageIndex = imageCount - 1;
                if (currentImageIndex >= imageCount) currentImageIndex = 0;

                var imageName = currentImageIndex + '.png';
                document.getElementById("currentImage").src = "./images/enemy/" + imageName;
                document.getElementById("imageDescription").innerHTML = descriptions[imageName];
            }
        </script>

        <?php
        include_once "footer.php";
    }
}

?>
