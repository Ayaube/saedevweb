<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class AyoubView {
    public function render() {
        include_once "header.php";
        ?>
        <div class="card">
            <div class="card-body bg-light ">
                <h1 class ="text-center"> Ayoub, 19 ans, passionné d'informatique et de nouvelles technologies </h1>
                <p class ="text-center">Actuellement en deuxième année de Bachelor Universitaire de Technologie (BUT) en informatique à l'IUT de Montreuil, je complète ma formation par une alternance à l'Institut National de l'Information Géographique et Forestière (IGN), où j'occupe le rôle d'administrateur du système d'information de la direction des programmes.</p>
                <p class ="text-center">Parallèlement, je gère ma propre auto-entreprise de services informatiques depuis 2018. Au cours de cette période, j'ai eu l'opportunité de travailler avec plus de 80 clients, développant ainsi une solide expérience dans le domaine. </p>
            </div>
            <div class="text-center">
                <a href="https://www.instagram.com/wyaayoub" target="_blank"><img src="images/logo/insta.png"></a>
                <a href="https://twitter.com/#" target="_blank"><img src="images/logo/x.png"></a>
            </div>

        </div>

        <?php
        include_once "footer.php";
    }
}



?>