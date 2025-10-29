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
          <a class="nav-link active" href="modul-4-oppgave2.php">Oppgave 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-4-oppgave3.php">Oppgave 3</a>
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

?>
      <pre>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Fullt navn: <input type="text" name="fnavn" placeholder="Fornavn" required="required"><br>
            E-post: <input type="email" name="epost" placeholder="E-post" required="required"><br>
            Telefon: <input type="tel" name="tlf" placeholder="12345678" required="required" minlength="8" maxlength="8"><br>
            Fødselsdato: <input type="date" name="fdato" value="2001-05-05"><br>
            <input type="submit" name="register" value="Registrér">
            <!-- Legger til skjult felt for å kunne sjekke om det er bot eller menneske (Busch, 2022, s. 183) -->
            <input type="hidden" name="sjekk" value="">
        </form>
    </pre>

<?php 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$fnavnErr = "";
$fnavn = "";



  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_REQUEST['register'])) {
    $fnavn = $_POST['fnavn'];
    $epost = $_POST['epost'];
    $tlf = $_POST['tlf'];
    $fdato = $_POST['fdato'];
    $sjekk = $_POST['sjekk'];


      // Sjekk for bot
    if (isset($_POST['sjekk']) && $_POST['sjekk'] == "") {
        echo "Hurra! Et ekte menneske!<br>";
    } else {
        echo "Bot alert!!<br>";
    }

    
    // Navne-validering
    if (empty($_POST["fnavn"])) {
        $fnavnErr = "Navn er påkrevd";
    } else {
        $fnavn = test_input($_POST["fnavn"]);
        if (!preg_match("/^[a-zA-ZæøåÆØÅ ]*$/", $fnavn)) {
            $fnavnErr = "Kun bokstaver og mellomrom er tillatt";
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


    // Skriv ut navnefeil hvis den finnes
    if (!empty($fnavnErr)) {
        echo "<p style='color:red;'>$fnavnErr</p>";
    }

    $brukermatrise = array(
      'navn' => $_POST['fnavn'],
      'epost' => $_POST['epost'],
      'telefon' => $_POST['tlf'],
      'fdato' => $_POST['fdato']
      );

      print_r($brukermatrise);
}


  ?>



    </div>
</body>
</html>