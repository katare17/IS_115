<?php 

$tall1 = 19;
$tall2= 30;
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
          <a class="nav-link active" href="modul-2-oppgave4.php">Oppgave 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-2-oppgave5.php">Oppgave 5</a>
        </li>
    </div>
  </div>
</nav>
    <link rel="stylesheet" href="bootstrap.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="style.css">
=======
>>>>>>> 6ee1eb2ba38fb942262153ff4b7c572ffb190e7c
    <title>Katarina Kirkhus</title>
</head>

<body>
<<<<<<< HEAD
    <div class="centered-content"> 
=======
>>>>>>> 6ee1eb2ba38fb942262153ff4b7c572ffb190e7c
    <h1>Oppgave 4</h1>
    <br>
    <p>Dette er tallene jeg har skrevet inn: <?php echo $tall1?> & <?php echo $tall2?>
    <br><br>
    Se hva som skjer når vi utfører dette mattestykket: <?php echo $tall1?> - <?php echo $tall2?> = <?php echo ($tall1 - $tall2)?>
    <br>
    Svaret blir -11. 
    
    <br>
    <br>
    Men det er jo ikke den absolutte differansen. Den er nemlig:
    <?php
     echo $absoluteDifference = abs($tall1 - $tall2);
    ?>
    <br>
    <br> 
    Og motsatt vei: 
    <?php
     echo $absoluteDifference2 = abs($tall2 - $tall1);
    ?>
</p>
<<<<<<< HEAD
</div>
=======
>>>>>>> 6ee1eb2ba38fb942262153ff4b7c572ffb190e7c

</body>
</html>