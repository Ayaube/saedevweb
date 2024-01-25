<?php
if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
class ToursView {
    private $descriptions;
    private $imageCount;
    private $titre;

    public function __construct($description,$titre) {
        $this->descriptions = $description;
        $this->titre = $titre;
        $this->imageCount = count($this->descriptions);
    }

    public function render() {
        include_once "header.php";
        ?>

        <div id="enemyContainer">
            <button onclick="changeImage(-1)">Précédent</button>
            <button onclick="changeImage(1)">Suivant</button>
            <br>

            <div id="imageTitre" class="h1 fw-bold"><?php echo $this->titre['0.png']; ?></div>
            <img src="./images/tower/0.png" id="currentImage" />
            <div id="imageDescription"><?php echo $this->descriptions['0.png']; ?></div>
        </div>

        <script>
            var currentImageIndex = 0;
            var imageCount = <?php echo $this->imageCount; ?>;
            var descriptions = <?php echo json_encode($this->descriptions); ?>;
            var nom = <?php echo json_encode($this->titre); ?>;
            function changeImage(direction) {
                currentImageIndex += direction;
                if (currentImageIndex < 0) currentImageIndex = imageCount - 1;
                if (currentImageIndex >= imageCount) currentImageIndex = 0;

                var imageName = currentImageIndex + '.png';
                document.getElementById("currentImage").src = "./images/tower/" + imageName;
                document.getElementById("imageDescription").innerHTML = descriptions[imageName];
                document.getElementById("imageTitre").innerHTML = nom[imageName];

            }
        </script>

        <?php
        include_once "footer.php";
    }
}

?>
