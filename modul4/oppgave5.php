<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
</head>

<body>
    <div class="centered-content"> 
        <?php 
          $tallMatrise = [65, 23, 98, 12, 4, 111, 98.5, 77, 44, 56]; 

          function svarePaaOppgaveFem($tallMatrise) {
            echo 'Matrisens innhold er: ' . implode(", ", $tallMatrise) . '.<br>';


            $sum = array_sum($tallMatrise);
            echo 'Matrisens sum er: ' . $sum . '.<br>';
            
            $gjennomsnitt = $sum / count($tallMatrise);
            echo 'Matrisens gjennomsnitt er: ' . $gjennomsnitt . '.<br>';


            $minst = min($tallMatrise);
            echo 'Matrisens laveste verdi er: ' . $minst . '.<br>';


            $storst = max($tallMatrise);
            echo 'Matrisens høyeste verdi er: ' . $storst . '.<br>';


            $tallMatriseSortert = $tallMatrise;
            sort($tallMatriseSortert);
            $antall_elementer = count($tallMatriseSortert);

            if ($antall_elementer % 2 !== 0) {
              $midterste_element = floor(($antall_elementer - 1) / 2);
              $median = $tallMatriseSortert[$midterste_element];
            } else {
              $midterste_element_1 = ($antall_elementer / 2) - 1;
              $midterste_element_2 = $antall_elementer / 2;
              $median = ($tallMatriseSortert[$midterste_element_1] + $tallMatriseSortert[$midterste_element_2]) / 2;
            }

            echo 'Matrisens median er: ' . $median . '.<br>';

            echo 'Matrisens innhold etter sortering er: ' . implode(", ", $tallMatriseSortert) . '.<br>';

          }
          
          svarePaaOppgaveFem($tallMatrise);

        ?>
    </div>

</body>
</html>


