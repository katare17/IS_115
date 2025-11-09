<!DOCTYPE html>
<html>
<head>
<?php include '../inc/header.inc.oppgave.php';?>
</head>

<body>
    <div class="centered-content"> 
        <?php 
            
            $date1 = "2031-01-21 00:00:00";
            $date2 = "2025-09-24 00:12:34";
            $today_date = date("Y-m-d H:i:s");

            echo "<p>Jeg har skrevet inn følgende datoer: <br><strong>$date1</strong> <br><strong>$date2</strong></p>";

            function date_passed($date)
            {
            $today = date("Y-m-d H:i:s");
            if ($date <= $today) 
                {
                    echo "<p>Datoen er ikke passert: $date</p>";
                } else {
                    echo "<p>Datoen er passert: $date</p>";
                }
            }

            date_passed($date2);
            date_passed($date1);
            date_passed($today_date);
        ?>
    </div>

</body>
</html>