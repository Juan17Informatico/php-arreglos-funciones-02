<?php

//3 michis, que tengan nombre, ocupación, color y un array de comidas favoritas y no favoritas

$michis = array(
    "Michi-supremo" => array(
        "Nombre" => "Carlitos",
        "Ocupacion" => "Vender gatitos",
        "Color" => "Amarillo",
        "Comidas" => array(
            "Favoritas" => array(
                "Pescado",
                "Leche"
            ),
            "No favoritas" => array(
                "Lentejas",
                "Perritos cachorros"
            ),
        ), 
    ),
    "Michi-intermedio" => array(
        "Nombre" => "Superman",
        "Ocupacion" => "Comprar gatitos",
        "Color" => "Azul",
        "Comidas" => array(
            "Favoritas" => array(
                "Cachorros",
                "Almendras"
            ),
            "No favoritas" => array(
                "Sapitos",
                "Pescados"
            ),
        ), 
    ),
    "Michi-inferior" => array(
        "Nombre" => "Frank",
        "Ocupacion" => "Militar",
        "Color" => "Verde",
        "Comidas" => array(
            "Favoritas" => array(
                "Sangre humana",
                "Arroz"
            ),
            "No favoritas" => array(
                "Leche",
                "Sushi"
            ),
        ), 
    ),
);

echo "El primer michi es: Nombre: " . $michis["Michi-supremo"]["Nombre"] . " \n "
        . "Su Ocupación es: " . $michis["Michi-supremo"]["Ocupacion"]  . " \n "
        . "Es de color: " . $michis["Michi-supremo"]["Color"] . " \n "
        . "Su Comida favorita es: " . $michis["Michi-supremo"]["Comidas"]["Favoritas"][0] . " \n "
        . "Su Comida no favorita es: " . $michis["Michi-supremo"]["Comidas"]["No favoritas"][0] . " \n ";