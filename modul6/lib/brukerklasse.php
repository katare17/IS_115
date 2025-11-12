<?php 
// Lager en klasse, litt som i IS-110
    class Bruker {
        public function __construct(
            public string $fornavn,
            public string $etternavn,
            public string $brukernavn,
            public string $fDato,
            public string $regDato,
            public string $tilgang,
        ) {}

        // Lager metode for å sjekke tilgang
        public function sjekkTilgang() {
            // Bruker $this for å få med variabelen fra klassen
            if ($this->tilgang == 'Student') {
                echo "<br> Kontoen din er registrert som " . $this->tilgang . " derfor har du ikke tilgang til denne siden.";
            } else {
                echo "<br> Kontoen din er registrert som '" . $this->tilgang . "' så du får redigere denne siden.";
            }
        }

        // Enkel klassemetode for å printe navn
        function skrivUtNavn() {
            echo "Brukerens fulle navn er: " . $this->fornavn . " " . $this->etternavn . ".";
        }
    }

    // Lager en bruker direkte inn i en array
    $brukere = array('fornavn' => 'Mikkel', 'etternavn' => 'Rev', 'brukernavn' => 'Luringen', 'fødselsdato' => '01.04.1984', 'registreringsdato' => date('Y-m-d H:i:s'), 'tilgang' => 'Student');

    // Henter ut informasjonen fra arrayen til å lage ny bruker 
    $bruker1 = new Bruker(
        fornavn: $brukere['fornavn'],
        etternavn: $brukere['etternavn'],
        brukernavn: $brukere['brukernavn'],
        fDato: $brukere['fødselsdato'],
        regDato: $brukere['registreringsdato'],
        tilgang: $brukere['tilgang']
    );

?>