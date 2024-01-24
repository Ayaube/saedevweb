<?php

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
