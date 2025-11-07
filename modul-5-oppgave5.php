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
          <a class="nav-link" href="modul-5-oppgave4.php">Oppgave 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="modul-5-oppgave5.php">Oppgave 5</a>
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

function sjekkAnagram($ord1, $ord2){
    // Gjør alle bokstavene lower case
    $ord1 = strtolower($ord1);
    $ord2 = strtolower($ord2);

    // Splitter ordene for å kunne sortere riktig
    $ord1Splittet = str_split($ord1);
    $ord2Splittet = str_split($ord2);

    // Sorterer bokstavene alfabetisk
    sort($ord1Splittet);
    sort($ord2Splittet);

    // Sjekker de to ordene opp mot hverandre, printer etter resultatet
    if($ord1Splittet == $ord2Splittet){
        echo "<h3>" . $ord1 . " er et anagram av " . $ord2 . "</h3> <br>";
    }
    else{
        echo "<h3>" . $ord1 . " er ikke et anagram av " . $ord2 . "</h3> <br>";
    }

}

$ord1 = "Katarina";
$ord2 = "Ole";
$ord3 = "Agnes";
$ord4 = "KaRoline";
$ord5 = "agNEs";
$ord6 = "senGA";
$ord7 = "Odd Nelvik";
$ord8 = "Vond kilde";

// Kjører for å sjekke og printe resultat
sjekkAnagram($ord1, $ord2);
sjekkAnagram($ord3, $ord4);
sjekkAnagram($ord5, $ord6);
sjekkAnagram($ord7, $ord8);

?>
</body>
</html>