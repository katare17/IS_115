<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
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


