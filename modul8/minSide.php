<?php session_start();?>

<!DOCTYPE hmtl>
<html>
    <head>
        <?php
            if (empty($_SESSION['logged_in'])) {
                header("Location: redirect.php");
                exit;
            }

            include "inc/head.inc.php";
        ?>
    </head>
    <body>
        <?php include "inc/navbarController.php"; ?>

        <h1>Velkommen, <?php echo htmlspecialchars($_SESSION['FirstName']); ?>!</h1>
        <p>Hyggelig å se deg igjen, <?php echo htmlspecialchars($_SESSION['FirstName'] . " " . $_SESSION['LastName']); ?>.</p>
    </body>
</hmtl>