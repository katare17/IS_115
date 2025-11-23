<?php session_start();?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            session_unset();
            session_destroy();
            include "inc/head.inc.php";
        ?>
    </head>
    <body>
        <?php include "inc/navbarController.php"; ?>
        <h1>Du er nå logget ut</h1>
        <a href="innlogging.php" class="btn">Logg inn</a>
        <a href="registrering.php" class="btn">Registrer deg</a>
    </body>
</html>