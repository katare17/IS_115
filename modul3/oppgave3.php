<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
</head>

<body>
    <div class="centered-content"> 
      <?php
        function renteutregner($solrunder)
        {
          $S0 = 1000;
          $rente = 1.045;

          for($i=0; $i < $solrunder; $i++)
          {
            $n = $i+1;

            ${"S$n"} = ${"S$i"} * $rente;
            echo "Saldoen er " . ${"S$n"} . " etter $i år <br>";
          }
        }
        renteutregner(3);
      ?>
    </div>
</body>
</html>