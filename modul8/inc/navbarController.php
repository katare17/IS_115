        <?php            
            if (!empty($_SESSION['logged_in'])) {
                include "inc/innloggetHeader.inc.php";
            } else {
                include "inc/header.inc.oppgave.php";}
        ?>