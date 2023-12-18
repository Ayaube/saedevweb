<?php
    class ModeleRegister extends Database{
        public function __construct(){

        }

        public function register(){
            $statement = Database::$db->prepare("SELECT * FROM Joueur WHERE username=? OR email=?");
            $statement->execute([$_POST['username'], $_POST['email']]);
            $answer = $statement->fetchAll();
            
            if (sizeof($answer) > 0) {
                echo "<h1>Choisissez un autre nom d'utilisateur, celui-ci est déjà pris !</h1>";
            }else{
                $statement = Database::$db->prepare("INSERT INTO Joueur(username, email, passw_hash, date_creation) VALUES (?, ?, ?, '1990-01-01')");
                $hashed_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $statement->execute([$_POST['username'], $_POST['email'], $hashed_pass]);
            }
        }

        public function usernameAlreadyExists(){
            
        }
    }
?>