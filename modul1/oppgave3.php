<?php
$alder = 26;
$navn = "Katarina";
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

    <h2>Tabellform:</h2>
        <table class="table table-hover">
            <tr class="table-active">
                <th>Navn</th>
                <th>Alder</th>
            </tr>
            <tr class="table-success">
                <td><?php echo $navn?></td>
                <td><?php echo $alder?></td>

            </tr>
        </table>
            <br> 

        <h2>Nummerert liste:</h2>
            <ol>
                <li><?php echo $navn ?></li>
                <li><?php echo $alder ?></li>
            </ol>
            <br> 


        <h2>Punktliste:</h2>
            <ul>
                <li><?php echo $navn ?></li>
                <li><?php echo $alder ?></li>
            </ul>
                <br> 

        <h2>Paragrafform:</h2>
            <p>
            Navnet i en paragraf: <?php echo $navn ?>.
            <br> 
            Alderen i en paragraf: <?php echo $alder ?>. 
            </p>
            </div>

    </body>
</html>