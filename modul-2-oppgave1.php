<?php 

$navn = "kAtaRina KriStiansEn egebAkken"

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
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="modul-2-oppgave1.php">Oppgave 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-2-oppgave2.php">Oppgave 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-2-oppgave3.php">Oppgave 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-2-oppgave4.php">Oppgave 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-2-oppgave5.php">Oppgave 5</a>
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
    <h1>Oppgave 1</h1>
    <br>
    <p>Dette er navnet jeg har skrevet inn: <?php echo $navn ?>. 
    <br>
    <br>
        1) Her er navnet fikset: <?php echo ucwords(strtolower($navn)) ?>.
    <br>
        2) Basert på antallet mellomrom, er det <?php echo (1 + substr_count($navn, " "))?> navn i tekststrengen.
    <br>
        3) Her er antallet tegn i navnet uten mellomrom: <?php echo strlen(str_replace(" ", "", $navn))?>.
</p>
</div>

</body>
</html>