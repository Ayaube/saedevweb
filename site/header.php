<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!-- Éléments de la navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notre-jeu.php">Notre Jeu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="classement.php">Classement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="a-propos.php">A Propos</a>
                </li>
            </ul>


            <?php
            $bool = true;
            if ($bool) {
                echo '<ul class="navbar-nav"><li class="nav-item"><a class="nav-link mes-parties-link" href="mes-parties.php">Mes Parties</a></li></ul>';
            }
            ?>

            <!-- Bouton de connexion -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-custom" href="/site/?module=login">Connexion</a>
                </li>
            </ul>
        </div>
    </div>

</nav>
