<!DOCTYPE html>
<html>
<head>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Modul 5</a>
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
          <a class="nav-link active" href="modul-5-oppgave4.php">Oppgave 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-5-oppgave5.php">Oppgave 5</a>
        </li>
    </div>
  </div>
</nav>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Katarina Kirkhus</title>
</head>

<body>

<?php 
$tallMatrise1 = [5, 3, 9, 3, 0, 5, 7, 7, 9];
$tallMatrise2 = [2, 2, 5, 4, 5, 3, 4, 3];
$tallMatrise3 = [2, 2, 5, 7, 4, 5, 3, 4, 3, 9];

function finnUnikVerdi($tallMatrise) {
    // Får en oversikt over hvor mange ganger et tall forekommer i matrisen
    $antall_verdier = array_count_values($tallMatrise);
    // Lager variabler som skal lagre unike verdier, samt hvor mange unike verdier det er i matrisen
    $antall_unike = 0;
    $unikt_tall = 0;
    
    // Går gjennom matrisen og sjekker om noen av verdiene forekommer kun én gang og oppdaterer begge variablene overfor dersom det finnes unike tall
    foreach ($antall_verdier as $verdi => $antall) {
        if ($antall === 1) {
            $unikt_tall = $verdi;
            $antall_unike++;
        }
    }
    
    // Lager en sjekk i tilfelle det er flere unike, ellers ville funksjonen kun beholdt den siste unike verdien
    if ($antall_unike > 1) {
        echo "<br> Her er det flere unike, derfor printes ingen.";

    } else if ($antall_unike < 1) {
        echo "<br> Her er det ingen unike, derfor printes ingen.";
    }
    
    
    else {
        // Går gjennom og henter nøkkelen til den unike verdien
        foreach($tallMatrise as $index => $verdi) {
            if ($verdi == $unikt_tall) {
                echo "<br> Nøkkelen " . $index . " inneholder den unike verdien " . $unikt_tall;
            }
        }
    }
}

finnUnikVerdi($tallMatrise1);
finnUnikVerdi($tallMatrise2);
finnUnikVerdi($tallMatrise3);
?>

</body>
</html>