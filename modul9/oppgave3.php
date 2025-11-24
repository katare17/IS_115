    <?php 

        // BrukerID hardkodes her for å unngå tull i testing
        $userID = 1; 
        $meldinger = [];
        $opplastetFil = null;

        if(isset($_POST['Send']) && isset($_FILES['cv'])) {

            $filtyper = ['application/pdf' => 'pdf'];
            $max_filstr = 1048576;
            $kat = "filer/";

            if(!is_dir($kat)) {
                mkdir($kat, 0777, true);
            }
            
            if(is_uploaded_file($_FILES['cv']['tmp_name'])) {
                $filtype = $_FILES['cv']['type'];
                $filstr = $_FILES['cv']['size'];

                if(!array_key_exists($filtype, $filtyper)) {
                    $meldinger[] = "Ugyldig filtype. Vennligst prøv igjen med en PDF-fil.";
                }

                if($filstr > $max_filstr) {
                    $meldinger[] = "Filen er større enn 1MB";
                }

                if(empty($meldinger)) {
                    $suffiks = $filtyper[$filtype];
                    $nyttNavn = $userID . "." . $suffiks;
                    $fullSti = $kat . $nyttNavn;

                    if(move_uploaded_file($_FILES['cv']['tmp_name'], $fullSti)) {
                        $meldinger[] = "Filen er lastet opp";
                        $opplastetFil = [
                            "navn" => $nyttNavn,
                            "path" => "filer/" . $nyttNavn,
                            "size" => $filstr,
                            "type" => $filtype,
                            "endret" => date("d.m.Y H:i:s", filemtime($fullSti))
                        ];

                        header("Location: metaData.php?file=" . urlencode($nyttNavn));
                        exit;
                    } else {
                        $meldinger[] = "Fikk ikke til å flytte filen";
                    }
                }
            } else {
                $meldinger[] = "Ingen fil ble valgt";
            }
        }
    ?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "inc/head.inc.php" ?>
    </head>
    <body>
        <?php include "inc/header.inc.oppgave.php" ?>


        <?php if(!empty($meldinger)):?>
            <p>
                <?php 
                    foreach($meldinger as $melding) echo htmlspecialchars($melding) . "<br>";
                ?>
            </p>
            <?php endif;?>


        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <div>
                <div>
                    <input name="cv" type="file" size="20" accept="application/pdf">
                </div>
            </div>
            <div>
                <input type="submit" name="Send" value="Last opp pdf">
            </div>
        </form>

        <?php 
            if($opplastetFil): ?>
            <table>
                <tr><td>Filnavn</td><td><?= htmlspecialchars($opplastetFil["navn"]) ?></td></tr>
                <tr><td>Filtype</td><td><?= htmlspecialchars($opplastetFil["type"]) ?></td></tr>
                <tr><td>Størrelse</td><td><?= round($opplastetFil["size"]/1024, 1) ?>KB</td></tr>
                <tr><td>Mappeplassering</td><td><?= htmlspecialchars($kat) ?></td></tr>
                <tr><td>Sist endret</td><td><?= $opplastetFil["endret"] ?></td></tr>
                <tr><td>Lenke til fil</td><td><a href="<?=  htmlspecialchars($opplastetFil["path"]) ?>" target="_blank">Åpne fil</a></td></tr>
            </table>
        <?php endif; ?>
    </body>
</html>
