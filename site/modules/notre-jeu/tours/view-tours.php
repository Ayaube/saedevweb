<?php
if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
class ToursView {
    private $descriptions;
    private $imageCount;

    public function __construct() {
        $this->descriptions = [
            '0.png' => 'Tourelle de base qui inflige des dégâts simples',
            '1.png' => 'Tourelle qui émet des dégâts électriques, cela touche les 3 à 5  ennemis derrière',
            '2.png' => 'Même principe que la tourelle précédente mais qui transforme toutes les cibles, sauf “.exe” et “Virus”',
            '3.png' => 'Tourelle qui ne fait que très peu de dégâts mais permet de ralentir les ennemis touchés',
            '4.png' => 'Tourelle attaquant en cône et faisant reculer les ennemis touchés par plusieurs projectiles à la fois. Très peu de portée. Temps de recharge élevé',
            '5.png' => 'Tourelle qui transforme les ennemis “.exe” en “.sh” au bout d’un certain nombre de coups, ne faisant pas de dégâts, équivalant à un pourcentage des pv de la cible. Inefficace contre des boss. Portée réduite et coût conséquent',
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
            <img src="./images/tower/0.png" id="currentImage" />
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
                document.getElementById("currentImage").src = "./images/tower/" + imageName;
                document.getElementById("imageDescription").innerHTML = descriptions[imageName];
            }
        </script>

        <?php
        include_once "footer.php";
    }
}

?>
