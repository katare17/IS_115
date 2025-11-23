<?php
require_once('./inc/database.inc.php');

function LeggTilBruker(PDO $pdo, string $fornavn, string $etternavn, string $epost, string $fødselsdato, string $passordHash): bool { 

try {
    $sql = "INSERT IGNORE INTO Users 
            (FirstName, LastName, Email, DateOfBirth, Password_hash) 
            VALUES 
            (:FirstName, :LastName, :Email, :DateOfBirth,:Password_hash)"; 

    $q = $pdo->prepare($sql);


    $q->bindParam(':FirstName', $fornavn, PDO::PARAM_STR);
    $q->bindParam(':LastName', $etternavn, PDO::PARAM_STR);
    $q->bindParam(':Email', $epost, PDO::PARAM_STR);
    $q->bindParam(':DateOfBirth', $fødselsdato, PDO::PARAM_STR);
    $q->bindParam(':Password_hash', $passordHash, PDO::PARAM_STR);

    $q->execute();

    return $pdo->lastInsertId() > 0;
} catch (PDOException $e) {
    echo "Feil ved tilkobling: " . $e->getMessage() . "<br>"; 
    return false; // Kun for læring, bør logges!
}
}
?>