<?php
$alder = 26;
$navn = "Katarina";
?>

<!DOCTYPE html>
<html>
    <head>
      <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Modul 1</a>
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
          <a class="nav-link" href="modul-1-oppgave1.php">Oppgave 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-1-oppgave2.php">Oppgave 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="modul-1-oppgave3.php">Oppgave 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-1-oppgave4.php">Oppgave 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-1-oppgave5.php">Oppgave 5</a>
        </li>
    </div>
  </div>
</nav>
    <link rel="stylesheet" href="bootstrap.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="style.css">
=======
>>>>>>> 6ee1eb2ba38fb942262153ff4b7c572ffb190e7c
        <title>Navn og alder</title>
        <meta charset="UTF-8">
        
    </head>

    <body>
<<<<<<< HEAD
  <div class="centered-content"> 
=======

>>>>>>> 6ee1eb2ba38fb942262153ff4b7c572ffb190e7c
    <h1>Oppgave 3</h1>
            <br> 

    <h2>Tabellform:</h2>
        <table class="table table-hover">
            <tr class="table-active">
                <th>Navn</th>
                <th>Alder</th>
            </tr>
            <tr class="table-success">
                <td><?php echo $navn?></td>
                <td><?php echo $alder?></td>

            </tr>
        </table>
            <br> 

        <h2>Nummerert liste:</h2>
            <ol>
                <li><?php echo $navn ?></li>
                <li><?php echo $alder ?></li>
            </ol>
            <br> 


        <h2>Punktliste:</h2>
            <ul>
                <li><?php echo $navn ?></li>
                <li><?php echo $alder ?></li>
            </ul>
                <br> 

        <h2>Paragrafform:</h2>
            <p>
            Navnet i en paragraf: <?php echo $navn ?>.
            <br> 
            Alderen i en paragraf: <?php echo $alder ?>. 
            </p>
            </div>

    </body>
</html>