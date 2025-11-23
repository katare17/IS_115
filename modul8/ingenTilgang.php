<?php session_start();?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "inc/head.inc.php";?>
    </head>
    <body>
        <?php include "inc/navbarController.php"; ?>
        <h1> Dette har du ikke lov til!</h1>
        <div>
            <a href="utlysninger.php" class="btn">Jobber</a>
            <a href="minSide.php" class="btn">Min side</a>
        </div>
    </body>
</html>