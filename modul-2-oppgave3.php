<?php 

$email1 = "katare17@uia.no";
$email2 = "mikael.no";

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
          <a class="nav-link" href="modul-2-oppgave2.php">Oppgave 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="modul-2-oppgave3.php">Oppgave 3</a>
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
    <title>Katarina Kirkhus</title>
</head>

<body>
    <h1>Oppgave 3</h1>
    <br>
    <p>Dette er epostene jeg har skrevet inn: <?php echo $email1?> & <?php echo $email2?>. 
    <br>
    Sjekket: <?php if 
    (filter_var($email1, FILTER_VALIDATE_EMAIL)) {
        echo "Epostadressen '$email1' er gyldig.";
    } else {
        echo "Epostadressen '$email1' er ugyldig.";
    }?>

    <br>
    Sjekket: <?php if 
    (filter_var($email2, FILTER_VALIDATE_EMAIL)) {
        echo "Epostadressen '$email2' er gyldig.";
    } else {
        echo "Epostadressen '$email2' er ugyldig.";
    }?>


</p>

</body>
</html>