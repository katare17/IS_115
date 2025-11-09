
<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
</head>

<body>
    <div class="centered-content" style="text-align:center"> 
        <p><strong>Printer ut tallene 1 til 9: </strong><br>
            <?php
                $sum = 0;
                for ($i = 9; $i > 0; $i--) {
                    $sum += $i;
                    echo "$i<br>";
                }
                echo "<br><strong>Ferdig å telle! Summen ble:</strong> $sum";
            ?>
        </p>
    </div>
</body>
</html>