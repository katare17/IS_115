`<?php
require_once('./inc/database.inc.php');

function LeggTilBruker(PDO $pdo, string $fornavn, string $etternavn, string $epost, string $tlf): bool { 

try {
    $sql = "INSERT IGNORE INTO Brukere 
            (fornavn, etternavn, epost, tlf) 
            VALUES 
            (:fornavn, :etternavn, :epost, :tlf)"; 

    $q = $pdo->prepare($sql);


    $q->bindParam(':fornavn', $fornavn, PDO::PARAM_STR);
    $q->bindParam(':etternavn', $etternavn, PDO::PARAM_STR);
    $q->bindParam(':epost', $epost, PDO::PARAM_STR);
    $q->bindParam(':tlf', $tlf, PDO::PARAM_STR);

    $q->execute();

    return $pdo->lastInsertId() > 0;
} catch (PDOException $e) {
    echo "Feil ved tilkobling: " . $e->getMessage() . "<br>"; 
    return false; // Kun for læring, bør logges!
}
}
?>