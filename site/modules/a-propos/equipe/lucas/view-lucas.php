<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class LucasView {
    public function render() {
        include_once "header.php";
        ?>
        <div class="card">
            <div class="text-center card-body bg-transparent border border-black">
                <h1> Lucas, passionné de développement et sport</h1>
                <p>Actuellement, je poursuis mes études en deuxième année du Bachelor Universitaire de Technologie en informatique à l'IUT de Montreuil. En complément de mes études, je suis également en formation en alternance chez Credit Agricole.</p>
                <p> J'devais percer au foot mais vas-y ligament tu connais</p>
                <a href="https://www.instagram.com/#" target="_blank"><img src="images/logo/insta.png"></a>
                <a href="https://twitter.com/#" target="_blank"><img src="images/logo/x.png"></a>
            </div>
        </div>

        <?php
        include_once "footer.php";
    }
}



?>