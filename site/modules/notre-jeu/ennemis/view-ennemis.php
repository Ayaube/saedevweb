<?php
if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
class EnnemisView {
    private $descriptions;
    private $imageCount;
    private $noms;

    public function __construct($description,$noms) {
        $this->descriptions = $description;
        $this->noms = $noms;
        $this->imageCount = count($this->descriptions);
    }

    public function render() {
        include_once "header.php";
        ?>

        <div id="enemyContainer">
            <button onclick="changeImage(-1)">Précédent</button>
            <button onclick="changeImage(1)">Suivant</button>
            <br>
            <div id="enemyName" class="h1 fw-bold"><?php echo $this->noms['0.png']; ?></div>
            <img src="./images/enemy/0.png" id="currentImage" />
            <div id="imageDescription"><?php echo $this->descriptions['0.png']; ?></div>
        </div>

        <script>
            var currentImageIndex = 0;
            var imageCount = <?php echo $this->imageCount; ?>;
            var descriptions = <?php echo json_encode($this->descriptions); ?>;
            var noms = <?php echo json_encode($this->noms); ?>;

            function changeImage(direction) {
                currentImageIndex += direction;
                if (currentImageIndex < 0) currentImageIndex = imageCount - 1;
                if (currentImageIndex >= imageCount) currentImageIndex = 0;

                var imageName = currentImageIndex + '.png';
                document.getElementById("currentImage").src = "./images/enemy/" + imageName;
                document.getElementById("imageDescription").innerHTML = descriptions[imageName];
                document.getElementById("enemyName").innerHTML = noms[imageName];
            }

        </script>

        <?php
        include_once "footer.php";
    }
}

?>
