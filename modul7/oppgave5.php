<!DOCTYPE html>
<html>
    <head>
        <?php include "inc/header.inc.oppgave.php";?>
    </head>
    <body>
        <?php
            require_once "inc/database.inc.php";
            try {

            // p = preferanse
            // b = bruker
            // Henter informasjon fra preferanser og brukere, og slår sammen disse basert på informasjonen som ligger i koblingstabellen
            $sql = "
                SELECT 
                    p.preferanseID,
                    p.navn AS preferanse_navn,
                    b.brukerID,
                    b.fornavn,
                    b.etternavn,
                    b.epost
                FROM Preferanser p
                JOIN Kobling_Bruker_Preferanser bp ON bp.preferanseID = p.preferanseID
                JOIN Brukere b ON b.brukerID = bp.brukerID
                ORDER BY p.navn
            ";

            // Henter ut informasjonen SQL-spørringen hentet hele veien til PHP
            $stmt  = $pdo->query($sql);
            $rader = $stmt->fetchAll();

            // Dersom vi fikk noen rader, skal vi lage en tom matrise, som så tar imot informasjonen i form av matriser
            if ($rader) {
                $grupperinger = [];

                foreach ($rader as $rad) {
                    $preferanse = $rad['preferanse_navn'];
                    $grupperinger[$preferanse][] = $rad;
                }

                // Basert på informasjonen i $grupperinger skal det printes rader i HTML-tabeller
                foreach ($grupperinger as $preferanseNavn => $brukere) {
                    echo "<h2> ---------------- - " . htmlspecialchars($preferanseNavn) . "</h2>";
                    echo "<table border='1' cellpadding='8' cellspacing='0'>";
                    echo "<thead>
                            <tr>
                                <th>BrukerID</th>
                                <th>Fornavn</th>
                                <th>Etternavn</th>
                                <th>E-post</th>
                            </tr>
                        </thead>
                        <tbody>";

                            foreach ($brukere as $bruker) {
                                echo "<tr>";
                                echo "<td>" . (int)$bruker['brukerID'] . "</td>";
                                echo "<td>" . htmlspecialchars($bruker['fornavn']) . "</td>";
                                echo "<td>" . htmlspecialchars($bruker['etternavn']) . "</td>";
                                echo "<td>" . htmlspecialchars($bruker['epost']) . "</td>";
                                echo "</tr>";
                            }

                    echo "</tbody></table>";
                }
            } else {
                echo "<p>Ingen brukere med registrerte preferanser.</p>";
            }

            } catch (PDOException $e) {
                echo "<p>Feil ved henting: " . htmlspecialchars($e->getMessage()) . "</p>";
            }
        ?>

    </body>
</html>
