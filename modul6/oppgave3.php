<?php

include 'inc/header.inc.oppgave.php';
include "lib/brukerklasse.php";

// Setter inn og lager klassen "på nytt" for å overskrive og endre
    class Bruker {
        // Disse skal lages på et annet tidspunkt, så de blir liggende utenfor konstruktøren
        protected string $regDato;
        protected string $brukernavn = "";
        // Konstruktøren
        public function __construct(
            public string $fornavn,
            public string $etternavn,
            public string $fDato,
            public string $tilgang
        ) {
            // Lagrer datoen på et annet tidspunkt i koden enn ved forrige versjon
            $this->regDato =date('Y-m-d H:i:s');
            // Lager brukernavn
            $muligeBokstaver = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            for ($i = 0; $i < 6; $i++) {
                $this->brukernavn .= $muligeBokstaver[random_int(0, strlen($muligeBokstaver) - 1)];
            }
        }

        public function sjekkTilgang() {
            if ($this->tilgang == 'Student') {
                echo "<br> Kontoen din er registrert som " . $this->tilgang . " derfor har du ikke tilgang til denne siden.";
            } else {
                echo "<br> Kontoen din er registrert som '" . $this->tilgang . "' så du får redigere denne siden.";
            }
        }

        function skrivUtNavn() {
            echo "<br> Brukerens fulle navn er: " . $this->fornavn . " " . $this->etternavn . ".";
        }

        function skrivUtBrukernavn() {
            echo "<br> Ditt automatisk genererte brukernavn er: <b>" . $this->brukernavn . "</b> dette kan ikke endres.";
        }
    }

    $brukere = array('fornavn' => 'Mikkel', 'etternavn' => 'Rev', 'brukernavn' => 'Luringen', 'fødselsdato' => '01.04.1984', 'tilgang' => 'Arbeidsgiver');

    $bruker1 = new Bruker(
        fornavn: $brukere['fornavn'],
        etternavn: $brukere['etternavn'],
        fDato: $brukere['fødselsdato'],
        tilgang: $brukere['tilgang']
    );

    print_r($bruker1);
    $bruker1->skrivUtBrukernavn();
?>