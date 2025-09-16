<?php 

<<<<<<< HEAD
    // Definerer funksjonen og lengden på passordet
function generatePassword($length = 8) {

    // Legger inn alle mulige tegn, hhv. i forskjellige variabler ettersom vi 
    // skal ha minst én av hver
    $numbers    = "0123456789";
    $uppercases = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercases = "abcdefghijklmnopqrstuvwxyz";

    // Påser at vi henter minst et tegn fra hver variabel 
    // (random_int henter vilkårlig mellom index 0 og last)
    $password  = $numbers[random_int(0, strlen($numbers) - 1)];
    $password .= $uppercases[random_int(0, strlen($uppercases) - 1)];
    $password .= $lowercases[random_int(0, strlen($lowercases) - 1)];

    // Henter inn de resterende 5 tegnene (også random)
    $all = $numbers . $uppercases . $lowercases;
    for ($i = strlen($password); $i < $length; $i++) {
        $password .= $all[random_int(0, strlen($all) - 1)];
    }

    // Sikkerhetssteg: tar passordet og endrer rekkefølgen på tegnene slik at det 
    //ikke alltid er tall, stor bokstav, liten bokstav
    return str_shuffle($password);
}
=======
$navn = "Egebakken"

>>>>>>> 6ee1eb2ba38fb942262153ff4b7c572ffb190e7c
?>

<!DOCTYPE html>
<html>
<head>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Modul 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Tilbake til moduler
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-2-oppgave1.php">Oppgave 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="modul-2-oppgave2.php">Oppgave 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-2-oppgave3.php">Oppgave 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-2-oppgave4.php">Oppgave 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="modul-2-oppgave5.php">Oppgave 5</a>
        </li>
    </div>
  </div>
</nav>
    <link rel="stylesheet" href="bootstrap.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="style.css">
    <title>Katarina Kirkhus</title>  
</head>

<body>
  <div class="centered-content"> 
    <h1>Oppgave 5</h1>
    <br>
    <p>I denne oppgaven skal jeg generere et passord på åtte tegn, hvor minst et 
      <br>
      av dem skal være et tall og minst ett av dem skal være en stor bokstav. Jeg 
      <br>
      har vurdert flere forskjellige måter å gjøre nettopp dette på blant annet å 
      <br>
      endre kodeeksempel 3.18 fra boken til å økes til 8 tegn, slik:
      <br><br>
      <!-- md5 krypterer, date henter datostempel i YmdHis-format, rand henter 
       tegn fra krypteringen (start, siste-start), antall)-->
      <i>$kode = substr(md5(date("YmdHis")), rand(0, 24), 8);</i>
      <br><br>
      Som du ser, er tallene 24 og 8 endret fra bokas 27 og 4. Dette er pga. at 
      <br> 
      tallet i midten refererer til hvor i den 32-tegn lange hashkoden vi senest 
      <br> 
      kan begynne å hente ut tegn. Ettersom vi skal ha ut 8 tegn, vil det være 
      <br> 
      for sent å starte på det 25. tallet, da det kun er 7 tall igjen å hente fra 
      <br>
      dette punktet. Likevel valgte jeg å ikke bruke denne koden, ettersom jeg 
      <br>
      ikke fikk garantert bruk av tall eller stor bokstav. 
      <br><br><br>
      Isteden har jeg skrevet en annen kode, som garanterer at jeg får minst et tall,
      <br>
      minst én stor bokstav, samt 8 tegn totalt. 
      <br>
      Da blir passordet seende ut slik som dette: <?php echo generatePassword(8)?>.
      <br><br>
      Her er flere eksempler på passord som genereres:
      <?php echo generatePassword(8)?>
      <?php echo generatePassword(8)?>
      <?php echo generatePassword(8)?>
</p>
</div>
=======
    <title>Katarina Kirkhus</title>
</head>

<body>
    <h1>Oppgave 5</h1>
    <br>
    <p>
</p>

>>>>>>> 6ee1eb2ba38fb942262153ff4b7c572ffb190e7c
</body>
</html>