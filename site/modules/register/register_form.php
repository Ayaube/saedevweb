
    <h2>Inscription</h2>
    <form action="index.php?module=register&action=try_register" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="register-email" name="email" required>
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="confirm_password">Mot de passe :</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br>
        <input type="submit" value="S'inscrire" id="register-submit">
    </form>