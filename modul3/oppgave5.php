<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
</head>

<body>
    <div class="centered-content"> 
        <?php    
            function keiserens_sjakkbrett()
            {
                global $korntotal;
                $ruter = 64;
                $hvetekorn = 0.5;
                $korntotal = array($hvetekorn);

                for($i=1; $i <= $ruter; $i++)
                {
                    $hvetekorn = $hvetekorn * 2;
                    $korntotal[] = $hvetekorn;
                    echo "På rute nr. " . $i . " er det " . $hvetekorn . " antall hvetekorn. <br>";

                }
            }
            keiserens_sjakkbrett();
            array_sum($korntotal);
            echo "Hvetekornene veier totalt " . (array_sum($korntotal) / 1000000 * 0.035) . " tonn.";

            
        ?>
    </div>
</body>
</html>