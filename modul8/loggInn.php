<?php session_start();?>

<?php 
    // Sjekker om en bruker er logget inn og bytter lokasjon til minSide om man er det
    if (!empty($_SESSION['logged_in'])) {
        header("Location: minSide.php");
        exit;
    }
    // Henter inn databasen og autentiseringsfunksjonene
    require_once "inc/authFunctions.php";
    require_once("inc/database.inc.php");
?>

<!DOCTYPE html>
<html>
    <head>
            <?php include "inc/head.inc.php";?>
    </head>


    <body>
        <!-- Henter inn navbar som stemmer med hvorvidt man er logget inn eller ikke -->
        <?php include "inc/navbarController.php";?>

        <?php

            // Prøvd å logge inn?
            if(isset($_POST['logginn'])) {

                // Kobler til database
                $email = $_POST['Email'] ?? '';
                $password = $_POST['Password'] ?? '';

                // Lager SQL-spørringens struktur
                $sql = "SELECT UserID, FirstName, LastName, Password_hash as password_hash, RoleID, FailedAttempts, LastFailedAttempt, LockedUntil
                        FROM users 
                        WHERE Email = :Email 
                        LIMIT 1";

                // Steg 1: Forbereder spørringen
                $sp = $pdo->prepare($sql);
                $sp->execute([':Email' => $email]);

                // Henter data
                $medlem = $sp->fetch(PDO::FETCH_OBJ);

                if(!$medlem) {
                    echo "<p style='color:red;'>Brukernavn/epost og/eller passord er ikke riktig</p>";
                    exit;
                }

                // Sjekker om brukeren er utestengt og nullstiller failed attempts dersom det er over en time siden
                if(!empty($medlem->LastFailedAttempt)) {
                    $tz = new DateTimeZone("Europe/Oslo");
                    $now = new DateTime("now", $tz);
                    $lastFail = new DateTime($medlem->LastFailedAttempt, $tz);

                    $sekunderSiden = $now->getTimestamp() - $lastFail->getTimestamp();

                    if($sekunderSiden >= 3600) {
                        nullstillFeilforsøk($pdo, $medlem->UserID);
                        $medlem->FailedAttempts = 0;
                        $medlem->LockedUntil = null;
                        $medlem->LastFailedAttempt = null;
                    }
                }

                // Skriver ut feilmelding ved låst bruker
                if(erBrukerLåst($medlem)) {
                    echo "<p style='color:red;'>For mange feilede forsøk. Prøv igjen om 1 time</p>";
                    exit;
                }

                // Når brukeren logger inn vellykket, nullstilles feilforsøkene, er det ikke vellykket så logges forsøket
                if(password_verify($password, $medlem->password_hash)) {

                    nullstillFeilforsøk($pdo, $medlem->UserID);

                    $_SESSION['logged_in'] = true;
                    $_SESSION['UserID'] = $medlem->UserID;
                    $_SESSION['FirstName'] = $medlem->FirstName;
                    $_SESSION['LastName'] = $medlem->LastName;
                    $_SESSION['RoleID'] = $medlem->RoleID;
                        
                    header("Location: minSide.php");
                    exit();
                } else {
                    $attempts = registrerFeiletInnlogging($pdo, $medlem->UserID);
                    if ($attempts >= 3) {
                        echo "<p style='color:red;'>For mange feilede forsøk. Prøv igjen om 1 time.</p>";
                        exit;
                    } else {
                        echo "<p style='color:red;'>Brukernavn/epost og/eller passord er ikke riktig. Forsøk: $attempts av 3.</p>";
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