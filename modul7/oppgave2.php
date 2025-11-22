<!DOCTYPE html>
<html>
<head>
<?php include 'inc/header.inc.oppgave.php';?>
</head>

<body>

    <div class="centered-content"> 
<?php

?>
      <pre>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Fornavn: <input type="text" name="fornavn" placeholder="Fornavn" required="required"><br>
            Etternavn: <input type="text" name="etternavn" placeholder="Etternavn" required="required"><br>
            E-post: <input type="email" name="epost" placeholder="E-post" required="required"><br>
            Telefon: <input type="tel" name="tlf" placeholder="12345678" required="required" minlength="8" maxlength="8"><br>
            <input type="submit" name="register" value="Registrér">
            <!-- Legger til skjult felt for å kunne sjekke om det er bot eller menneske (Busch, 2022, s. 183) -->
            <input type="hidden" name="sjekk" value="">
        </form>
    </pre>

<?php 

// Henter funksjonen(metoden) som legger til brukere
require_once('lib/leggTilBruker.db.inc.php');


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$fornavnErr = "";
$etternavnErr = "";
$epostErr = "";
$tlfErr = "";
$suksessMelding = "";


    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_REQUEST['register'])) {
        $fornavn = $_POST['fornavn'];
        $etternavn = $_POST['etternavn'];
        $epost = $_POST['epost'];
        $tlf = $_POST['tlf'];
        $sjekk = $_POST['sjekk'];


        // Sjekk for bot
        if (isset($_POST['sjekk']) && $_POST['sjekk'] == "") {
            echo "Hurra! Et ekte menneske!<br>";
        } else {
            echo "Bot alert!!<br>";
        }

    
        // Navne-validering
        if (empty($_POST["fornavn"])) {
            $fornavnErr = "Fornavn er påkrevd";
        } else {
            $fornavn = test_input($_POST["fornavn"]);
            if (!preg_match("/^[a-zA-ZæøåÆØÅ ]*$/", $fornavn)) {
                $fornavnErr = "Kun bokstaver og mellomrom er tillatt";
            }
        }

        // Navne-validering
        if (empty($_POST["etternavn"])) {
            $etternavnErr = "Etternavn er påkrevd";
        } else {
            $etternavn = test_input($_POST["etternavn"]);
            if (!preg_match("/^[a-zA-ZæøåÆØÅ ]*$/", $etternavn)) {
                $etternavnErr = "Kun bokstaver og mellomrom er tillatt";
            }
        }

        // E-post-validering
        if (isset($_POST['epost'])) {
            if (filter_var($_POST['epost'], FILTER_VALIDATE_EMAIL)) {
                echo $_POST['epost'] . " har gyldig e-postadresse-format.<br>";
            } else {
                echo $_POST['epost'] . " har ikke gyldig e-postadresse-format.<br>";
            }
        }


        // Skriv ut fornavn-feil hvis den finnes
        if (!empty($fornavnErr)) {
            echo "<p style='color:red;'>$fornavnErr</p>";
        }

        // Skriv ut etternavn-feil hvis den finnes
        if (!empty($etternavnErr)) {
            echo "<p style='color:red;'>$etternavnErr</p>";
        }

        if (!empty($epost)) {
            echo "<p style='color:red;'>$epostErr</p>";
        }

        if(!empty($tlfErr)) {
            echo "<p style='color:red;'>$tlfErr</p>";
        }

        if (empty($fornavnErr) && empty($etternavnErr) && empty($epostErr) && empty($tlfErr) && $sjekk === "") {
            if (LeggTilBruker($pdo, $fornavn, $etternavn, $epost, $tlf)) {
                $suksessMelding = "Brukeren ble lagret i databasen.";
            } else {
                $suksessMelding = "Noe gikk galt under lagring, prøv på nytt.";
            }
            echo "<p style='color:green;'>$suksessMelding</p>";
        }

        $brukermatrise = array(
        'fornavn' => $_POST['fornavn'],
        'etternavn' => $_POST['etternavn'],
        'epost' => $_POST['epost'],
        'tlf' => $_POST['tlf'],
        );

        print_r($brukermatrise);
    }
  ?>
    </div>
</body>
</html>