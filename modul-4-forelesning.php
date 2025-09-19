<?php

//Lager en array
$a = array('Silje', 'Mikael');

//Legger til flere i arrayen
$a[] = 'Peder';
$a[] = 'Stine';

//Legger til på index 7
$a[7] = 'Steffen';

//Legger til på neste etter den siste gitte, så denne havner på 8, selv om 4-6 er tomme.
$a[] = 'Janne';


//Overskriver den tidligere verdien til index 7
$a[7] = 'Per';

//Henter ut index 3 fra array og printer 
echo $a[3];

//Setter inn en br i php-koden
echo "<br>";
echo "<br>";


//Printer hele arrayen med index
print_r($a);

//Printer hele arrayen med index på en oversiktlig måte
echo "<pre>";
print_r($a);
echo "</pre>";

//Printer all info om arrayen og dataen
var_dump($a);


$b = array(5, 'Silje');


echo "<br>";
echo "<br>";

//count &/eller sizeof gir størrelsen
echo count($a);

echo "<br>";


//for-each (det du vil gå gjennom __AS__ det du vil lagre den som) {}
foreach($a as $v)
{ 
    echo "<br>" . $v;
}


echo "<br>";

//for-each (det du vil gå gjennom __AS__ nøkkel OG det du vil lagre den som) {}
foreach($a as $n => $v)
{ 
    echo "<br>Nøkkel: " . $n . " og verdi: " . $v;
}


echo "<br>";

//samme som den over utenom var-navn: for-each (det du vil gå gjennom __AS__ nøkkel OG det du vil lagre den som) {}
foreach($a as $nøkkel => $verdier)
{ 
    echo "<br>Nøkkel: " . $nøkkel . " og verdi: " . $verdier;
}

//Her er variablene slettet


//Bestemt antall i 
$c = range(1,10);
echo "<br>";

//SJekk om noe er i arrayen
if(in_array('Silje', $a))
{
    echo "<br>Silje finnes i arrayet";
}
echo "<br>";

//Sjekk om noe IKKE er i arrayen
if(!in_array('Sondre', $a))
{
    echo "<br>Sondre finnes ikke i arrayet";
}
echo "<br>";

// === spør om verdien er lik og datatypen er den samme


echo "<br>";
echo "<br>";

/* Lag et array med fem tilfeldige loddnr. 1-100. Trekk deretter et vinnerlodd (1-100) og sjekk om du har vunnet. */
$lodd = array(3, 79, 53, 66, 99);
$random = rand(1, 100);

if(in_array($random, $lodd))
{
    echo "<br> Gratulerer!";
}
    else { 
            echo "Dessverre...";
        }

echo "<br>";
echo "<br>";

$nyttlodd = array();

do {
    $dette_lodd = rand(1, 100);
    if(!in_array($dette_lodd, $nyttlodd))
    {
        $nyttlodd[] = $dette_lodd;
    }
} while(sizeof($nyttlodd) < 5);

//implode = array.to.string
//explode string.to.array
sort($nyttlodd);
echo "Dine lodd (sortert): <strong>" . implode(", ", $nyttlodd) . ".</strong><br>";

$vinnerlodd = rand(1,100);
echo "<br>Vinnerloddet ble nummer <strong>" . $vinnerlodd . "</strong>.";

if(in_array($vinnerlodd,$nyttlodd))
{
    echo "<br>Du har lodd nummer <strong>" . $vinnerlodd . "</strong> og du har dermed vunnet!!!";
}

else 

    {
        echo "<br>Beklager, ingen gevinst!";
    }


echo "<br>";
echo "<br>";

//associative array: her legger du inn navn på nøkkelen
$l = array('navn' => 'Silje', 'mobilnr' => 38159800, 'epost' => 'silje@yahoo.no');
echo $l['navn'];
echo "<br>";
echo $l['epost'];
echo "<br>";
echo $l['mobilnr'];

echo "<br>";
echo "<br>";

foreach($l as $n => $v)
{
    echo $n . ": " . $v . "<br>";
}

?>