<!DOCTYPE html>
<html>
    <head>
        <?php include "inc/header.inc.oppgave.php"?>
    </head>
    <body>
        <?php 
            // Prøvd å logge inn?
            if(isset($_POST['logginn'])) {
                // Kobler til database
                require_once("inc/database.inc.php");

                $email = $_POST['Email'] ?? '';
                $password = $_POST['Password'] ?? '';

                // Lager SQL-spørringen struktur
                $sql = "SELECT UserID, FirstName, LastName, Password_hash as password_hash
                        FROM users WHERE Email = :Email LIMIT 1";

                // Steg 1: Forbereder spørringen
                $sp = $pdo->prepare($sql);
                $sp->execute([':Email' => $email]);

                // Henter data
                $medlem = $sp->fetch(PDO::FETCH_OBJ);


                if(!$medlem) {
                    echo "<p style='color:red;'>Brukernavn/epost og/eller passord er ikke riktig</p>";
                } else {
                    if(password_verify($password, $medlem->password_hash)) {
                        header("Location: utlysninger.php");
                        exit();
                    } else {
                        echo "<p style='color:red;'>Brukernavn/epost og/eller passord er ikke riktig</p>";
                    }
                }
            }
        ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div> 
                <input type="text" name="Email" placeholder="Brukernavn/Epost" />
                <input type="password" name="Password" placeholder="Passord" />
                <input type="submit" name="logginn" value="Logg inn">
            </div>
        </form>
    </body>
</html>