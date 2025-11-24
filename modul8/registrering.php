<!DOCTYPE html>
<html>
<head>
    <?php include "inc/head.inc.php";?>
    </head>
    <body>
        <?php include "inc/navbarController.php"; ?>
        <?php
            // Tidssone
            $dts = new DateTimeZone("Europe/Oslo");
        
            // Tid ved lasting av skjema
            $dtstart = new DateTime("now", $dts);

            // Kjøres når brukeren trykker "registrer"
            if(isset($_POST['registrer'])) {
                // Sjekk tid når skjemaet er sendt
                $dtstart = new DateTime($_POST['dtstart'], $dts);
                $dtslutt = new DateTime("now", $dts);

                // Henter ut dataen fra feltene
                $fornavn = $_POST['FirstName'] ?? '';
                $etternavn = $_POST['LastName'] ?? '';
                $epost = $_POST['Email'] ?? '';
                $passord = $_POST['Password'] ?? '';
                $bekreftPassord = $_POST['Confirm_Password'] ?? '';
                $fødselsdato = $_POST['DateOfBirth'] ?? '';

                // Sjekker at passordene er like
                if($passord === $bekreftPassord) {
                    echo "<p style='color:green;'>Passordene stemmer!</p>";
                    // Lager hash av passordet, for sikker lagring (her med salt via PASSWORD_DEFAULT)
                    $passordHash = password_hash($passord, PASSWORD_DEFAULT);

                    // Kobler til database for å legge til bruker
                    require_once "inc/database.inc.php";
                    require_once "inc/leggTilBruker.db.inc.php";

                    // Legger til brukeren
                    LeggTilBruker($pdo, $fornavn, $etternavn, $epost, $fødselsdato, $passordHash);

                    // Sender brukeren videre til login etter registrering
                    header("Location: loggInn.php");
                    exit;
                } else {
                    echo "<p style='color:red;'>Passordene er ikke like</p>";
                } 
            }
        ?>

    <pre>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Fornavn: <input type="text" name="FirstName" placeholder="Fornavn" required><br>
            Etternavn: <input type="text" name="LastName" placeholder="Etternavn" required><br>
            E-post: <input type="email" name="Email" placeholder="E-post" required><br>
            Fødselsdato: <input type="date" name="DateOfBirth" value=""><br>
            Passord: <input type="password" name="Password" placeholder="Passord" required><br>
            Bekreft passord: <input type="password" name="Confirm_Password" placeholder="Gjenta passord" required><br>
            <input type="submit" name="registrer" value="Registrer"><br>
            <input type="hidden" name="dtstart" value="<?php echo $dtstart->format("Y-m-d H:i:s.u"); ?>">
        </form>
    </pre>
</body>
</html>