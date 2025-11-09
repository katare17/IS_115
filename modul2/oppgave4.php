<?php 

$tall1 = 19;
$tall2= 30;
?>

<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
</head>

<body>
    <div class="centered-content"> 
    <h1>Oppgave 4</h1>
    <br>
    <p>Dette er tallene jeg har skrevet inn: <?php echo $tall1?> & <?php echo $tall2?>
    <br><br>
    Se hva som skjer når vi utfører dette mattestykket: <?php echo $tall1?> - <?php echo $tall2?> = <?php echo ($tall1 - $tall2)?>
    <br>
    Svaret blir -11. 
    
    <br>
    <br>
    Men det er jo ikke den absolutte differansen. Den er nemlig:
    <?php
     echo $absoluteDifference = abs($tall1 - $tall2);
    ?>
    <br>
    <br> 
    Og motsatt vei: 
    <?php
     echo $absoluteDifference2 = abs($tall2 - $tall1);
    ?>
</p>
</div>

</body>
</html>