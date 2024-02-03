<?php

//Arreglos asociativos

// $edades = array(
//     "Carlos" => 1,
//     "Oscar" => 1000,
//     "Mr Bestia" => 16,
//     "Lintromestio" => 124,
//     "Juan" => 40,
// );

// echo $edades["Oscar"];

// $cafes = array(
//     "Capuccino" => 100,
//     "Latte" => 49,
//     "Mocaccino" => 70,
// );

// echo "El precio del cafe Capuccino es de {$cafes['Capuccino']}";

$personas = array(
    "Carlos" => array(
        "Edad" => 20,
        "apellido" => "Santana"
    ),
    "Mr.Michi" => array(
        "Edad" => 18,
        "apellido" => "Satana"
    ),
);

echo "La informacion de Mr. Michi es: Edad: " . $personas["Mr.Michi"]["Edad"];