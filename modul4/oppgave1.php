<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
</head>

<body>
    <div class="centered-content"> 
        <?php 



            function matrise_print()
            {

                $a = array('Data 1');

                $a[3] = 'Data 2';
                $a[5] = 'Data 3';
                $a[7] = 'Data 4';
                $a[8] = 'Data 5'; 
                $a[15] = 'Data 6';
                
                print_r($a);

                foreach($a as $n => $v){
                    echo("<br> Verdien $v har nøkkelen $n");
                }
            }

            matrise_print();
        ?>
    </div>

</body>
</html>


