<?php
if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
class ToursView {
    private $descriptions;
    private $imageCount;
    private $titre,$ram,$flops;

    public function __construct($description,$titre,$ram,$flops) {
        $this->descriptions = $description;
        $this->titre = $titre;
        $this->ram = $ram;
        $this->flops = $flops;
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
            <div id="ram" class="fw-bold">Prix RAM : <?php echo $this->ram['0.png']; ?></div>
            <div id="flops" class="fw-bold">Prix Flops : <?php echo $this->flops['0.png']; ?></div>

        </div>

        <script>
            var currentImageIndex = 0;
            var imageCount = <?php echo $this->imageCount; ?>;
            var descriptions = <?php echo json_encode($this->descriptions); ?>;
            var nom = <?php echo json_encode($this->titre); ?>;
            var ram = <?php echo json_encode($this->ram); ?>;
            var flops = <?php echo json_encode($this->flops); ?>;
            function changeImage(direction) {
                currentImageIndex += direction;
                if (currentImageIndex < 0) currentImageIndex = imageCount - 1;
                if (currentImageIndex >= imageCount) currentImageIndex = 0;

                var imageName = currentImageIndex + '.png';
                document.getElementById("currentImage").src = "./images/tower/" + imageName;
                document.getElementById("imageDescription").innerHTML = descriptions[imageName];
                document.getElementById("imageTitre").innerHTML = nom[imageName];
                document.getElementById("ram").innerHTML = 'Prix RAM : ' + ram[imageName];
                document.getElementById("flops").innerHTML = 'Prix Flops : ' + flops[imageName];

            }
        </script>

        <?php
        include_once "footer.php";
    }
}

?>
