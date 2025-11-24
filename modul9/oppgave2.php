<!DOCTYPE html>
<html>
    <head>
        <?php include "inc/head.inc.php" ?>
    </head>
    <body>
        <?php include "inc/header.inc.oppgave.php" ?>
        <?php 
            function leggTilTekst($melding) {
            // Bruker a+ for å ikke overskrive det som allerede er i filen
            $fil = fopen("test.txt", "a+") or die("Kan ikke åpne filen");
            // Legger til dato for å kunne se de 10 siste endringene i annen metode
            $tid = date("Y-m-d H:i:s");
            $linje = "[$tid] $melding" . PHP_EOL;
            fwrite($fil, $linje);
            fclose($fil);
            }

            function lesDeSisteTi() {
                if(!file_exists("test.txt")) {
                    echo "<p>Fant ikke filen.</p>";
                    return;
                }

                $linjer = file("test.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                $siste10 = array_slice($linjer, -10);

                echo "De siste 10 logg-hendelsene er:";
                echo "<pre>";
                foreach($siste10 as $linje) {
                    echo htmlspecialchars($linje) . "\n";
                }
                echo "</pre>";
            }

            leggTilTekst("Denne teksten skrev jeg i VSCode i oppgave 2");
            lesDeSisteTi();
        ?>
    </body>
</html>
