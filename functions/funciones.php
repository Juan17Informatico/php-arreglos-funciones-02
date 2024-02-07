<?php

function getPokemon()
{

    $numeroAleatorio = rand(1, 4);

    echo $numeroAleatorio . "\n";

    switch ($numeroAleatorio) {
        case 1:
            echo "Pikachu";
            break;
        case 2:
            echo "Charmander";
            break;
        case 3:
            echo "Mewtwo";
            break;
        default:
            echo "Lo siento, no hay pokemon para ti";
    }
}

getPokemon();


//Función con parametro
