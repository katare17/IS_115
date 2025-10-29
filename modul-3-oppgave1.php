<!DOCTYPE html>
<html>
<head>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Modul 3</a>
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
          <a class="nav-link active" href="modul-3-oppgave1.php">Oppgave 1</a>
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
        <?php 
            
            $date1 = "2031-01-21 00:00:00";
            $date2 = "2025-09-24 00:12:34";
            $today_date = date("Y-m-d H:i:s");

            echo "<p>Jeg har skrevet inn følgende datoer: <br><strong>$date1</strong> <br><strong>$date2</strong></p>";

            function date_passed($date)
            {
            $today = date("Y-m-d H:i:s");
            if ($date <= $today) 
                {
                    echo "<p>Datoen er ikke passert: $date</p>";
                } else {
                    echo "<p>Datoen er passert: $date</p>";
                }
            }

            date_passed($date2);
            date_passed($date1);
            date_passed($today_date);
        ?>
    </div>

</body>
</html>