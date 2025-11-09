<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
</head>

<body>
    <div class="centered-content"> 
        <p>Her sjekkes det hva du burde ha på deg basert på temperaturen: <br>
        <?php    
            function bekledning($temperatur)
            {
                if($temperatur > 20)
                {
                    echo "t-skjorte og shorts";
                }
                else if($temperatur >= 15 && $temperatur <= 20)
                {
                    echo "langbukse og genser";
                }
                else if($temperatur >= 5 && $temperatur <= 14)
                {
                    echo "jakke og bukse";
                }
                else if($temperatur >= 0 && $temperatur <=4)
                {
                    echo "vinterjakke og lue";
                }
                else if($temperatur < 0)
                {
                    echo "ullundertøy og vintertøy";
                }
                else
                {
                    echo "vennligst legg inn en gyldig temperatur";
                }
            }
            echo "<br><br>Dersom det er 2 grader, burde du ha på: <br>";
            bekledning(2);

            echo "<br><br>Dersom det er 22 grader, burde du ha på: <br>";
            bekledning(22);

            echo "<br><br>Dersom det er 7 grader, burde du ha på: <br>";
            bekledning(7);

            echo "<br><br>Dersom det er 18 grader, burde du ha på: <br>";
            bekledning(18);

            echo "<br><br>Dersom det er -2 grader, burde du ha på: <br>";
            bekledning(-2)
        ?>
        </p>
    </div>
</body>
</html>