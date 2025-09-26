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
          <a class="nav-link" href="modul-3-oppgave1.php">Oppgave 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-3-oppgave2.php">Oppgave 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-3-oppgave3.php">Oppgave 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-3-oppgave4.php">Oppgave 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="modul-3-oppgave5.php">Oppgave 5</a>
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
            function keiserens_sjakkbrett()
            {
                global $korntotal;
                $ruter = 64;
                $hvetekorn = 0.5;
                $korntotal = array($hvetekorn);

                for($i=1; $i <= $ruter; $i++)
                {
                    $hvetekorn = $hvetekorn * 2;
                    $korntotal[] = $hvetekorn;
                    echo "På rute nr. " . $i . " er det " . $hvetekorn . " antall hvetekorn. <br>";

                }
            }
            keiserens_sjakkbrett();
            array_sum($korntotal);
            echo "Hvetekornene veier totalt " . (array_sum($korntotal) / 1000000 * 0.035) . " tonn.";

            
        ?>
    </div>
</body>
</html>