<?php 

include 'inc/header.inc.oppgave.php';
include "lib/brukerklasse.php";

class ValideringsKlasseII{
    // Lager variabelen epost, slik at den kan refereres til videre i oppgaven
    var $epost;

    public function epostValidering() {
        // Bruker den innebygde funksjonen for epostvalidering
        if (filter_var($this->epost, FILTER_VALIDATE_EMAIL)) {
            echo "$this->epost er registrert <br>";
        } else {
            echo "$this->epost er ikke gyldig. Vennligst bruk en gyldig epost <br>";
        }
    }
}

// Lager 3 instanser av klassen, som gis en epost og testes
$testObject1 = new ValideringsKlasseII;
$testObject1->epost = "vnrdklxngkl";

$testObject2 = new ValideringsKlasseII;
$testObject2->epost = "katare17@uia.no";

$testObject3 = new ValideringsKlasseII;
$testObject3->epost = "huttiheita@ngeo";

$testObject1->epostValidering();
$testObject2->epostValidering();
$testObject3->epostValidering();
?>