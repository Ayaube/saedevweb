<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class HorebView {
    public function render() {
        include_once "header.php";
        ?>
        <div class="card">
            <div class="text-center card-body bg-transparent border border-black">
                <h1> Horeb, 19 ans, passionné d'informatique et de MMA</h1>
                <p>Je suis actuellement étudiant en deuxième année de Bachelor Universitaire de Technologie (BUT) informatique à l'IUT de Montreuil. Parallèlement à ma formation, je suis en alternance chez SIKIWIS, où je travaille en tant que développeur.</p>
                <p> A coté de tout cela, je suis champion du monde poids lourd à l'UFC depuis decembre 2023. J'ai obtenu la ceinture après avoir mis KO avec ma claque devastatrice l'ancien champion, Jon Jones en seulement 1min30 de combat</p>
                <a href="https://www.instagram.com/hbs_470" target="_blank"><img src="images/logo/insta.png"></a>
                <a href="https://twitter.com/hbs_470" target="_blank"><img src="images/logo/x.png"></a>
            </div>



        </div>

        <?php
        include_once "footer.php";
    }
}



?>