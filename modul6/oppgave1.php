<?php 

include 'inc/header.inc.oppgave.php';
// Inkluderer klassen jeg har laget, inkludert brukeren i den
include 'lib/brukerklasse.php';

    print_r($bruker1);
    $bruker1->sjekkTilgang();
?>