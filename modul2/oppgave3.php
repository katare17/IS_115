<?php 

$email1 = "katare17@uia.no";
$email2 = "mikael.no";

?>

<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
</head>

<body>
    <div class="centered-content"> 
    <h1>Oppgave 3</h1>
    <br>
    <p>Dette er epostene jeg har skrevet inn: <?php echo $email1?> & <?php echo $email2?>. 
    <br>
    Sjekket: <?php if 
    (filter_var($email1, FILTER_VALIDATE_EMAIL)) {
        echo "Epostadressen '$email1' er gyldig.";
    } else {
        echo "Epostadressen '$email1' er ugyldig.";
    }?>

    <br>
    Sjekket: <?php if 
    (filter_var($email2, FILTER_VALIDATE_EMAIL)) {
        echo "Epostadressen '$email2' er gyldig.";
    } else {
        echo "Epostadressen '$email2' er ugyldig.";
    }?>


</p>
</div>

</body>
</html>