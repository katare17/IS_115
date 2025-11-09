    <?php 
        $tall1 = 5;
        $tall2 = 3;
    ?>

<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
</head>

<body>
    <div class="centered-content"> 
    <h1>Oppgave 4</h1>
    <p>Her kommer kalkulatoren min. Den tar tallene <?php echo $tall1?> og <?php echo $tall2?> og summerer dem, samt regner ut gjennomsnittet av dem. 
    <br>
    Summen av tallene blir <?php echo $tall1 + $tall2;?>.
    <br>
    Gjennomsnittet av tallene blir <?php echo ($tall1 + $tall2) / 2?>.
    </p>
</div>

</body>

</html>