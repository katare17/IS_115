<!DOCTYPE html>
<html>
<head>
<?php 
include "inc/header.inc.oppgave.php";
require_once("inc/database.inc.php");
require_once("lib/leggTilBruker.db.inc.php");
?>
</head>
<body>
<?php 
// spørring
$sql = "SELECT * FROM Brukere";

// GJør databasen klar for spørringen
$sp = $pdo->prepare($sql);
try {
    $sp->execute();
} catch (PDOException $e) {
    echo $e->getMessage() . "<br>";
}

// Definerer variabelen som skal ta imot informasjonen fra databasen
$brukere = $sp->fetchAll(PDO::FETCH_OBJ);

// Dersom det kom noen rader fra spørringen, skal følgende skje
if($sp->rowCount() > 0) {
        // Lag HTML-tabell
        echo "<table>";
        echo "<tr>";
        echo "<th>Fornavn</th>";
        echo "<th>Etternavn</th>";
        echo "<th>Epost</th>";
        echo "<th>Telefonnummer</th>";
        echo "<th>Registreringsdato</th>";
        echo "</tr>";
    // For hver bruker i brukere, lag en egen rad i tabellen med informasjonen deres
    foreach($brukere as $bruker) {
        echo "<tr class='table-success'>";
        echo "<td>" . htmlspecialchars($bruker->fornavn) . " </td>";
        echo "<td>" . htmlspecialchars($bruker->etternavn) . " </td>";
        echo "<td>" . htmlspecialchars($bruker->epost) . " </td>";
        echo "<td>" . htmlspecialchars($bruker->tlf) . " </td>";
        echo "<td>" . htmlspecialchars($bruker->regDato) . " </td>";
    }
} else {
    echo "Spørringen returnerte ingen oppføringer.";
}

?>
</body>
</html>