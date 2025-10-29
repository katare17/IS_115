<!DOCTYPE html>
<html>
<head>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Modul 4</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Tilbake til moduler
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-4-oppgave1.php">Oppgave 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-4-oppgave2.php">Oppgave 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="modul-4-oppgave3.php">Oppgave 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-4-oppgave4.php">Oppgave 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-4-oppgave5.php">Oppgave 5</a>
        </li>
    </div>
  </div>
</nav>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Katarina Kirkhus</title>
</head>

<body>
<div class="centered-content">
<?php
// ------------------
// 1. LAG BRUKERDATA
// ------------------
$brukerinfo = [
    "fnavn" => "Katarina Kirkhus",
    "epost" => "katarina@example.com",
    "tlf" => "12345678",
    "fdato" => "2001-05-05"
];

$fnavnErr = $epostErr = $tlfErr = "";
$melding = "";

// Funksjon for å rense input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// ------------------
// 2. HÅNDTER SKJEMA
// ------------------
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ny_fnavn = test_input($_POST["fnavn"]);
    $ny_epost = test_input($_POST["epost"]);
    $ny_tlf = test_input($_POST["tlf"]);
    $ny_fdato = test_input($_POST["fdato"]);

    $gyldig = true;

    // Valider navn
    if (empty($ny_fnavn)) {
        $fnavnErr = "Navn er påkrevd.";
        $gyldig = false;
    } elseif (!preg_match("/^[a-zA-ZæøåÆØÅ ]*$/", $ny_fnavn)) {
        $fnavnErr = "Kun bokstaver og mellomrom er tillatt.";
        $gyldig = false;
    }

    // Valider e-post
    if (!filter_var($ny_epost, FILTER_VALIDATE_EMAIL)) {
        $epostErr = "Ugyldig e-postadresse.";
        $gyldig = false;
    }

    // Valider telefon (må være 8 siffer)
    if (!preg_match("/^[0-9]{8}$/", $ny_tlf)) {
        $tlfErr = "Telefonnummer må være 8 siffer.";
        $gyldig = false;
    }

    if ($gyldig) {
        // Sjekk om det er endringer
        $endret = false;
        if ($ny_fnavn !== $brukerinfo["fnavn"] ||
            $ny_epost !== $brukerinfo["epost"] ||
            $ny_tlf !== $brukerinfo["tlf"] ||
            $ny_fdato !== $brukerinfo["fdato"]) {

            $brukerinfo["fnavn"] = $ny_fnavn;
            $brukerinfo["epost"] = $ny_epost;
            $brukerinfo["tlf"] = $ny_tlf;
            $brukerinfo["fdato"] = $ny_fdato;
            $endret = true;
        }

        if ($endret) {
            $melding = "<p class='success'>Brukeroppføringen er oppdatert!</p>";
        } else {
            $melding = "<p>Ingen endringer ble gjort.</p>";
        }
    } else {
        $melding = "<p class='error'>Skjemaet inneholder feil. Vennligst rett dem opp.</p>";
    }

}
?>

<h2>Brukerprofil</h2>

<!-- Bruker htmlspecialchars for å gjøre koden sikrere -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label>Fullt navn:
        <input type="text" name="fnavn" value="<?php echo $brukerinfo['fnavn']; ?>">
        <span class="error"><?php echo $fnavnErr; ?></span>
    </label><br>

    <label>E-post:
        <input type="email" name="epost" value="<?php echo $brukerinfo['epost']; ?>">
        <span class="error"><?php echo $epostErr; ?></span>
    </label><br>

    <label>Telefon:
        <input type="tel" name="tlf" value="<?php echo $brukerinfo['tlf']; ?>">
        <span class="error"><?php echo $tlfErr; ?></span>
    </label><br>

    <label>Fødselsdato:
        <input type="date" name="fdato" value="<?php echo $brukerinfo['fdato']; ?>">
    </label><br><br>

    <input type="submit" value="Oppdater profil"><br><br>
</form>
<?= $melding ?>

<?php     
  print_r($brukerinfo);
?>

</div>
</body>
</html>
