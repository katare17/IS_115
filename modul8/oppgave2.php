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
                require_once("inc/db.inc.php");

                // Lager SQL-spørringen struktur
                $sql = "SELECT ID, fornavn, etternavn, passord
                        FROM medlemmer WHERE brukernavn = :brukernavn";
            }
        ?>
    </body>
</html>