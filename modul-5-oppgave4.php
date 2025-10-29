<?php 

$tallMatrise = [5, 3, 9, 3, 0, 5, 7, 7, 9];

function finnUnikVerdi($tallMatrise) {
    // Får en oversikt over hvor mange ganger et tall forekommer i matrisen
    $antall_verdier = array_count_values($tallMatrise);
    // Lager variabler som skal lagre unike verdier, samt hvor mange unike verdier det er i matrisen
    $antall_unike = 0;
    $unikt_tall = 0;
    
    // Går gjennom matrisen og sjekker om noen av verdiene forekommer kun én gang og oppdaterer begge variablene overfor dersom det finnes unike tall
    foreach ($antall_verdier as $verdi => $antall) {
        if ($antall === 1) {
            $unikt_tall = $verdi;
            $antall_unike++;
        }
    }
    
    // Lager en sjekk i tilfelle det er flere unike, ellers ville funksjonen kun beholdt den siste unike verdien
    if ($antall_unike > 1) {
        echo "Her er det flere unike, derfor printes ingen.";

    } else {
        // Går gjennom og henter nøkkelen til den unike verdien
        foreach($tallMatrise as $index => $verdi) {
            if ($verdi == $unikt_tall) {
                echo "Nøkkelen " . $index . " inneholder den unike verdien " . $unikt_tall;
            }
        }
    }
}

finnUnikVerdi($tallMatrise);
?>