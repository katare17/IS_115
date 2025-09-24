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
          <a class="nav-link" href="modul-3-oppgave5.php">Oppgave 5</a>
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
        <p>Her sjekkes det hva du burde ha på deg basert på temperaturen: <br>
        <?php    
            function bekledning($temperatur)
            {
                if($temperatur > 20)
                {
                    echo "t-skjorte og shorts";
                }
                else if($temperatur >= 15 && $temperatur <= 20)
                {
                    echo "langbukse og genser";
                }
                else if($temperatur >= 5 && $temperatur <= 14)
                {
                    echo "jakke og bukse";
                }
                else if($temperatur >= 0 && $temperatur <=4)
                {
                    echo "vinterjakke og lue";
                }
                else if($temperatur < 0)
                {
                    echo "ullundertøy og vintertøy";
                }
                else
                {
                    echo "vennligst legg inn en gyldig temperatur";
                }
            }
            echo "<br><br>Dersom det er 2 grader, burde du ha på: <br>";
            bekledning(2);

            echo "<br><br>Dersom det er 22 grader, burde du ha på: <br>";
            bekledning(22);

            echo "<br><br>Dersom det er 7 grader, burde du ha på: <br>";
            bekledning(7);

            echo "<br><br>Dersom det er 18 grader, burde du ha på: <br>";
            bekledning(18);

            echo "<br><br>Dersom det er -2 grader, burde du ha på: <br>";
            bekledning(-2)
        ?>
        </p>
    </div>
</body>
</html>