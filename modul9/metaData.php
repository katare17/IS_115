<?php
$kat = __DIR__ . "/filer/";

if (!isset($_GET["file"])) {
    die("Ingen fil oppgitt.");
}

$fil = basename($_GET["file"]);
$fullSti = $kat . $fil;

if (!file_exists($fullSti)) {
    die("Filen finnes ikke.");
}

$size = filesize($fullSti);
$type = mime_content_type($fullSti);
$endret = date("d.m.Y H:i:s", filemtime($fullSti));
$path = "filer/" . $fil;
?>

<!DOCTYPE html>
<html>
<head>
    <?php include "inc/head.inc.php"; ?>
</head>
<body>
    <?php include "inc/header.inc.oppgave.php"; ?>

    <h2>Opplasting OK</h2>

    <table>
        <tr><td>Filnavn</td><td><?= htmlspecialchars($fil) ?></td></tr>
        <tr><td>Filtype</td><td><?= htmlspecialchars($type) ?></td></tr>
        <tr><td>Størrelse</td><td><?= round($size/1024, 1) ?> KB</td></tr>
        <tr><td>Mappeplassering</td><td><?= htmlspecialchars("filer/") ?></td></tr>
        <tr><td>Sist endret</td><td><?= $endret ?></td></tr>
        <tr>
            <td>Lenke til fil</td>
            <td><a href="<?= htmlspecialchars($path) ?>" target="_blank">Åpne fil</a></td>
        </tr>
    </table>
</body>
</html>
