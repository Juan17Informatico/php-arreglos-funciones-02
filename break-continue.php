<?php

$tienda_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 12,
    "Capuccino" => 27.5,
    "Mocca" => 24,
);

foreach ($tienda_de_cafes as $nombre => $precio) {
    
    if($nombre == "Recalentado"){
        continue;
    }
    
    echo "El café $nombre  es muy rico \n";
    // if ($nombre) {
    //     echo "¡Encontramos a Latte!";
    //     break;
    // }
}
