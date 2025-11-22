<!DOCTYPE html>
<html>
<head>
    <?php include "inc/header.inc.oppgave.php"?>
</head>

<body>
    <?php
        // Tidssone
        $dts = new DateTimeZone("Europe/Oslo");
        if(isset($_REQUEST['registrer'])) {
            // Sjekk tid når skjemaet er sendt
            $dtstart = new DateTime($_POST['dtstart'], $dts);
            $dtslutt = new DateTime("now", $dts);
            var_dump($dtstart); echo "<br>"; var_dump($dtslutt);
        } else {
            // Tid ved lasting av skjema
            $dtstart = new DateTime("now", $dts);
        }
        ?>

<pre>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Fornavn: <input type="text" name="fornavn" placeholder="Fornavn"><br>
        Etternavn: <input type="text" name="etternavn" placeholder="Etternavn"><br>
        E-post: <input type="email" name="epost" placeholder="E-post"><br>
        Telefon: <input type="tel" name="tlf" placeholder="Telefonnummer"><br>
        <input type="submit" name="registrer" placeholder="Registrer"><br>
        <input type="hidden" name="dtstart" value="<?php echo $dtstart->format("Y-m-d H:i:s.u"); ?>">
    </form>
</pre>

</body>
</html>