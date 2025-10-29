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
          <a class="nav-link active" href="modul-4-oppgave4.php">Oppgave 4</a>
        </li>
        <li class="nav-item">
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
        $brukermatrise = array();

          function AddToBrukerMatrise($fnavn, $epost, $tlf, $fdato) {
            global $brukermatrise;
            $brukermatrise[] = array("fnavn" => $fnavn, "epost" => $epost, "tlf" => $tlf, "fdato" => $fdato);
          }

          AddToBrukerMatrise("Kari Nordmann", "kari@nordmann.no", "34566543", "22-07-1982");
          AddToBrukerMatrise("Espen Askeladd", "askeladden@espen.no", "98765432", "01-01-1781");
          AddToBrukerMatrise("Ole Brumm", "brumm@honning.no", "44666664", "23-12-1925");


echo "<h2>Brukeroversikt</h2>";
        echo "<table class='table table-striped table-bordered'>";
        echo "<thead class='table-dark'>
                <tr>
                    <th>Navn</th>
                    <th>E-post</th>
                    <th>Telefon</th>
                    <th>Fødselsdato</th>
                </tr>
              </thead>
              <tbody>";

        foreach($brukermatrise as $brukerinfo){
            echo "<tr>";
            echo "<td>" . htmlspecialchars($brukerinfo["fnavn"]) . "</td>";
            echo "<td>" . htmlspecialchars($brukerinfo["epost"]) . "</td>";
            echo "<td>" . htmlspecialchars($brukerinfo["tlf"]) . "</td>";
            echo "<td>" . htmlspecialchars($brukerinfo["fdato"]) . "</td>";
            echo "</tr>";
        }

        echo "</tbody></table>";
        ?>
    </div>

</body>
</html>


