<?php 

include 'inc/header.inc.oppgave.php';
include "lib/brukerklasse.php";

class ValideringsKlasseII{
    var $epost;
    var $passord;
    var $tlf;

    // Bruker innebygd funksjon for å teste at eposten er riktig formattert 
    public function epostValidering() {
        if (filter_var($this->epost, FILTER_VALIDATE_EMAIL)) {
            echo "$this->epost er registrert <br>";
        } else {
            echo "$this->epost er ikke gyldig. Vennligst bruk en gyldig epost <br>";
        }
    }


    public function telefonValidering() {
        $feilmeldingerTelefon = [];
        // Sjekker at telefonnummeret er 8 siffer langt, ikke mer ikke mindre
        if(strlen($this->tlf) !=8) {
            $feilmeldingerTelefon[] = "Telefonnummeret må inneholde akkurat 8 tall";
        }

        // Bruker preg_match for å sjekke om telefonnummerets index 0 har annen verdi enn 4 eller 9
        if(!preg_match("/[49]/", $this->tlf[0])) {
            $feilmeldingerTelefon[] = "Telefonnummeret må starte med 4 eller 9";
        }

        // Bruker preg_match_all for å sjekke at alle verdiene i telefonnummeret er 0, 1, 2, 3, 4, 5, 6, 7, 8 eller 9
        if(!preg_match_all("/[0-9]/", $this->tlf)) {
            $feilmeldingerTelefon[] = "Telefonnummeret må bestå av tall";
        }

        // Sjekker om matrisen er tom, er den det så er telefonnummeret godkjent, ellers printes feilmeldingene
        if($feilmeldingerTelefon == []) {
            echo "Telefonnummeret er godkjent og lagres!";
        } else {
            foreach($feilmeldingerTelefon as $n => $feil) {
                echo "$feil";
            }
        }

        // Legger inn linjeskift for å markere overgang fra den aktuelle brukeren
        echo "<br>";
    }



    public function passordValidering() {
        $feilmeldinger = [];
        
        // Sjekker om det er minst 9 tegn i passordet brukeren har skrevet inn
        if (strlen($this->passord) < 9) {
            $feilmeldinger[] = "Passordet må inneholde minst 9 tegn";
        }

        // Sjekker om brukeren har brukt 1 stor bokstav og legger til feilmelding i matrisen hvis ikke
        if(!preg_match("/[A-ZÆØÅ]/", $this->passord)) {
            $feilmeldinger[] = "Passordet må inneholde minst 1 stor bokstav";
        }

        // Sjekker om brukeren har brukt minst 1 spesialtegn og legger til feilmelding i matrisen hvis ikke
        if(!preg_match("/[!@#$%^&*()\-_=+{};:,<.>]/", $this->passord)) {
            $feilmeldinger[] = "Passordet må inneholde minst 1 spesialtegn";
        }

        // Sjekker om brukeren har brukt minst 2 tall og legger til feilmelding i matrisen hvis ikke
        if(!preg_match_all("/[0-9]/", $this->passord) >= 2) {
            $feilmeldinger[] = "Passordet må inneholde minst 2 tall";
        }

        // Sjekker matrisen for feilmeldinger og sender dem til brukeren dersom den ikke er tom
        if($feilmeldinger == []) {
            echo "Passordet er godkjent og lagres!<br>";
        } else {
            foreach($feilmeldinger as $n => $feil) {
                echo "$feil <br>";
            }
        }
        echo "<br>";
    }

    // Samlemetode for å teste alle valideringsmetodene samtidig
    public function fullstendigValidering() {
        $this->epostValidering();
        $this->telefonValidering();
        $this->passordValidering();
    }
}

// Lager tre testobjekter av klassen over og legger til data om dem
$testObjekt1 = new ValideringsKlasseII;
$testObjekt1->epost = "katarina.com";
$testObjekt1->tlf = "98765432";
$testObjekt1->passord ="[FefiesjfkesFJL89";

$testObjekt2 = new ValideringsKlasseII;
$testObjekt2->epost = "katare@uia.no";
$testObjekt2->tlf = "45678923";
$testObjekt2->passord = "oeng2N6JEi{";

$testObjekt3 = new ValideringsKlasseII;
$testObjekt3->epost = "fbheijng";
$testObjekt3->tlf = "26374856";
$testObjekt3->passord = "j3ein7f/ep";

// Tester metodene på objektene
$testObjekt1->fullstendigValidering();
$testObjekt2->fullstendigValidering();
$testObjekt3->fullstendigValidering();

?>