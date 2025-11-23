<?php session_start();?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            if (empty($_SESSION['logged_in'])) {
                header("Location: redirect.php");
                exit;
            }

            if ($_SESSION['RoleID'] != 1) {
                header("Location: ingenTilgang.php");
                exit;
            }
            include "inc/head.inc.php";
        ?>
    </head>
    <body>
        <?php include "inc/navbarController.php"; ?>
        <h1>Her er det masse kule hemmelige ting :D</h1>
    </body>
</html>