<div class="header">
    <li class="list">
        <ul><a href="#">Accueil</a></ul>
        <ul><a href="#">Notre Jeu</a></ul>
        <ul><a href="#">Classement</a></ul>
        <ul><a href="#">A Propos</a></ul>
        <ul><a href="#"> Test</a></ul>
    </li>
    <li class="list">
        <?php
            $bool = true;
            if ($bool) {
                echo '<ul><a href="#">Mes Parties</a></ul>';
            }
        ?>
        <ul><a href="./modules/login/login_form.php">Connexion</a></ul>
    </li>
</div>