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
$sql = "SELECT * FROM Brukere";
$sp = $pdo->prepare($sql);


try {
    $sp->execute();
} catch (PDOException $e) {
    echo $e->getMessage() . "<br>";
}

$brukere = $sp->fetchAll(PDO::FETCH_OBJ);

if($sp->rowCount() > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Fornavn</th>";
        echo "<th>Etternavn</th>";
        echo "<th>Epost</th>";
        echo "<th>Telefonnummer</th>";
        echo "<th>Registreringsdato</th>";
        echo "</tr>";
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