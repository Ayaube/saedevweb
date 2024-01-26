<?php
if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}
class EnnemisView {
    private $descriptions;
    private $imageCount;
    private $noms,$pv,$vitesse,$gain;

    public function __construct($description,$noms,$pv,$vitesse,$gain) {
        $this->descriptions = $description;
        $this->noms = $noms;
        $this->pv = $pv;
        $this->vitesse = $vitesse;
        $this->gain = $gain;
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
            <div id="pv" class="fw-bold"> PV : <?php echo $this->pv['0.png']; ?></div>
            <div id="vitesse" class="fw-bold">Vitesse : <?php echo $this->vitesse['0.png']; ?></div>
            <div id="gain" class="fw-bold">Pieces gagnées après l'avoir eliminé : <?php echo $this->gain['0.png']; ?></div>

        </div>

        <script>
            var currentImageIndex = 0;
            var imageCount = <?php echo $this->imageCount; ?>;
            var descriptions = <?php echo json_encode($this->descriptions); ?>;
            var noms = <?php echo json_encode($this->noms); ?>;
            var pv = <?php echo json_encode($this->pv); ?>;
            var vitesse = <?php echo json_encode($this->vitesse); ?>;
            var gain = <?php echo json_encode($this->gain); ?>;
            function changeImage(direction) {
                currentImageIndex += direction;
                if (currentImageIndex < 0) currentImageIndex = imageCount - 1;
                if (currentImageIndex >= imageCount) currentImageIndex = 0;

                var imageName = currentImageIndex + '.png';
                document.getElementById("currentImage").src = "./images/enemy/" + imageName;
                document.getElementById("imageDescription").innerHTML = descriptions[imageName];
                document.getElementById("enemyName").innerHTML = noms[imageName];
                document.getElementById("pv").innerHTML = 'PV : ' + pv[imageName];
                document.getElementById("vitesse").innerHTML = 'Vitesse : ' + vitesse[imageName];
                document.getElementById("gain").innerHTML = "Pieces gagnées après l'avoir eliminé :  " + gain[imageName];

            }

        </script>

        <?php
        include_once "footer.php";
    }
}

?>
