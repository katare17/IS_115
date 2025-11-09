<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
</head>
<body>
  <div class="centered-content">   
I teksten kommer det frem at display_errors er satt til 
    <br>On lokalt og On på master value, dette betyr at dersom 
    <br>det finnes feil i koden, så vil det komme opp feilkoder 
    <br>i nettleseren. Document_root er satt til C:/xampp/htdocs, 
    <br>hvilket er mappen der oppgaven min er lagret. Å kjenne 
    <br>til bruken av phpinfo() tenker jeg er et godt utgangspunkt 
    <br>for å bli kjent med hvordan php-filen fungerer og hva man 
    <br>kan forvente av oppførsel i det man gjør videre, også 
    <br>kjent som konfigurasjonsinnstillingene. 
    </div>

</body>

<?php phpinfo();
?>