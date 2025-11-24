<!DOCTYPE html>
<html>
    <head>
        <?php include "inc/head.inc.php" ?>
    </head>
    <body>
        <?php include "inc/header.inc.oppgave.php" ?>

        <?php 
        // Forteller hvilken mappe som skal åpnes
        $kat = "../modul7/";
        $peker = opendir($kat);

        echo "<table border =\"1\">";
        echo "<tr>";
        echo "<th>Filnavn</th>";
        echo "<th>Filtype</th>";
        echo "<th>Filstørrelse</th>";
        echo "<th>Sist endret</th>";
        echo "<th>Kjørbar?</th>";
        echo "<th>Lesbar?</th>";
        echo "<th>Skrivbar?</th>";
        echo "</tr>";

        // Så lenge filen er åpnet og leses, gjør dette
        while($fil = readdir($peker)) {
            echo "<tr>";
            echo "<td><a href=\"" . $kat . $fil . "\">" . $fil . "</a></td>";
            echo "<td>" . filetype($kat . $fil) . "</td>";
            echo "<td>" . filesize($kat . $fil) . "</td>";
            echo "<td>" . date("d.m.Y \k\l. H:i",
            filemtime($kat . $fil)) . "</td>";
            echo "<td>" . (is_executable($kat . $fil) ? "Ja" : "Nei") . "</td>";
            echo "<td>" . (is_readable($kat . $fil) ? "Ja" : "Nei") . "</td>";
            echo "<td>" . (is_writeable($kat . $fil) ? "Ja" : "Nei") . "</td>";

            echo "</tr>";
        }

        // Lukker mappen igjen
        closedir($peker);
        ?>
    </body>
</html>
