<!DOCTYPE html>
<html>
<head>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Modul 4</a>
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
          <a class="nav-link" href="modul-4-oppgave1.php">Oppgave 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-4-oppgave2.php">Oppgave 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-4-oppgave3.php">Oppgave 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-4-oppgave4.php">Oppgave 4</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="modul-4-oppgave5.php">Oppgave 5</a>
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
          $tallMatrise = [65, 23, 98, 12, 4, 111, 98.5, 77, 44, 56]; 

          function svarePaaOppgaveFem($tallMatrise) {
            echo 'Matrisens innhold er: ' . implode(", ", $tallMatrise) . '.<br>';


            $sum = array_sum($tallMatrise);
            echo 'Matrisens sum er: ' . $sum . '.<br>';
            
            $gjennomsnitt = $sum / count($tallMatrise);
            echo 'Matrisens gjennomsnitt er: ' . $gjennomsnitt . '.<br>';


            $minst = min($tallMatrise);
            echo 'Matrisens laveste verdi er: ' . $minst . '.<br>';


            $storst = max($tallMatrise);
            echo 'Matrisens høyeste verdi er: ' . $storst . '.<br>';


            $tallMatriseSortert = $tallMatrise;
            sort($tallMatriseSortert);
            $antall_elementer = count($tallMatriseSortert);

            if ($antall_elementer % 2 !== 0) {
              $midterste_element = floor(($antall_elementer - 1) / 2);
              $median = $tallMatriseSortert[$midterste_element];
            } else {
              $midterste_element_1 = ($antall_elementer / 2) - 1;
              $midterste_element_2 = $antall_elementer / 2;
              $median = ($tallMatriseSortert[$midterste_element_1] + $tallMatriseSortert[$midterste_element_2]) / 2;
            }

            echo 'Matrisens median er: ' . $median . '.<br>';

            echo 'Matrisens innhold etter sortering er: ' . implode(", ", $tallMatriseSortert) . '.<br>';

          }
          
          svarePaaOppgaveFem($tallMatrise);

        ?>
    </div>

</body>
</html>


