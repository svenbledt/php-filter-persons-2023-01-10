<?php
/*  -----------------------------------------------------------------
Definiere $PERSONS als multidimensionaler Array.
-----------------------------------------------------------------
!! Prüfen: Eine PHP-Konstante hat kein '$' Symbol am Anfang.
!! die Personen aus dem JavaScript Array (unten) in PHP übernehmen
*/
define(
    "PEOPLE",
    array(
        array("first_name" => "Peter", "last_name" => "Towers", "age" => 86, "country" => "United States"),
        array("first_name" => "Paul", "last_name" => "Miller", "age" => 54, "country" => "United States"),
        array("first_name" => "Fritz", "last_name" => "Kleiner", "age" => 24, "country" => "Switzerland"),
        array("first_name" => "Hans", "last_name" => "Müller", "age" => 14, "country" => "Liechtenstein"),
        array("first_name" => "Jolanda", "last_name" => "Frankfurter", "age" => 36, "country" => "Germany"),
        array("first_name" => "Karl", "last_name" => "Keller", "age" => 30, "country" => "Germany"),
        array("first_name" => "Hanspeter", "last_name" => "Schröder", "age" => 42, "country" => "Germany"),
        array("first_name" => "Emilio", "last_name" => "Sottorno", "age" => 40, "country" => "Italy"),
        array("first_name" => "Robert", "last_name" => "Graveur", "age" => 54, "country" => "France"),
    )
);

function writePersonRow($person)
{
    echo "<tr><td>" . $person["first_name"] . "</td><td>" . $person["last_name"] . "</td><td>" . $person["age"] . "</td><td>" . $person["country"] . "</td></tr>";
}
function writeAllPersons()
{
    foreach (PEOPLE as $person) {
        writePersonRow($person);        
    }
}
function writeYoungerThan40()
{
    foreach (PEOPLE as $person) {
        if ($person['age'] < 41) {
            writePersonRow($person);        
        }
    }
}
function writeYoungNonSuisse()
{
    foreach (PEOPLE as $person) {
        if ($person['country'] != 'Switzerland' && $person['age'] < 30) {
            writePersonRow($person);        
        }
    }
}
?>