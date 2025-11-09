<?php 

$navn = "Egebakken";

?>

<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
</head>

<body>
    <div class="centered-content"> 
    <h1>Oppgave 2</h1>
    <br>
    <p>Dette er navnet jeg har skrevet inn: <?php echo $navn?>. 
    <br>
    Dette er navnet uten HTML- og PHP-kode: <?php echo strip_tags($navn) ?>. 
</p>
</div>

</body>
</html>