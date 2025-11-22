<?php
include 'inc/header.inc.oppgave.php';
include "lib/brukerklasse.php";

class Student extends Bruker {
    // Overskriver klassemetoden fra klassefilen
        public function sjekkTilgang() {
            if ($this->tilgang == 'Student') {
                echo "<br> Karakterene dine er ikke tilgjengelige enda";
            } else {
                echo "<br> Kontoen din er registrert som '" . $this->tilgang . "' så du har ingen karakterer å se til.";
            }
        }
};

    // Lager en instans av klassen Student (et objekt)
    $student1 = new Student(
        fornavn: $brukere['fornavn'],
        etternavn: $brukere['etternavn'],
        brukernavn: $brukere['brukernavn'],
        fDato: $brukere['fødselsdato'],
        regDato: $brukere['registreringsdato'],
        tilgang: $brukere['tilgang']
    );

    $student1->sjekkTilgang();


?>