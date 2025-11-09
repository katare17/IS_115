<?php 

$navn = "kAtaRina KriStiansEn egebAkken";

?>

<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
</head>

<body>
    <div class="centered-content"> 
    <h1>Oppgave 1</h1>
    <br>
    <p>Dette er navnet jeg har skrevet inn: <?php echo $navn ?>. 
    <br>
    <br>
        1) Her er navnet fikset: <?php echo ucwords(strtolower($navn)) ?>.
    <br>
        2) Basert på antallet mellomrom, er det <?php echo (1 + substr_count($navn, " "))?> navn i tekststrengen.
    <br>
        3) Her er antallet tegn i navnet uten mellomrom: <?php echo strlen(str_replace(" ", "", $navn))?>.
</p>
</div>

</body>
</html>