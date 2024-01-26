<div class="footer my-5 mt-auto">
    <div class="container text-center py-3">
        <p>Site créé par Lucas LIGER, Ayoub LAMCHICHI et Horeb SILVA dans le cadre de la SAE</p>
        <p>© 2024 IUT de Montreuil. Tous droits réservés.</p>
        <?php
            if (isset($_SESSION['role'])&&$_SESSION['role']!='admin' || !isset($_SESSION['role'])) {
                ?>
                <p><a href="index.php?module=feedback" class="footer-feedback-link">Soumettre un feedback</a></p>
                <!--        <p><button onclick="window.location.href='index.php?module=feedback';" class="btn btn-light">Soumettre un feedback</button></p>-->
                <?php
            }

        ?>

    </div>
</div>
