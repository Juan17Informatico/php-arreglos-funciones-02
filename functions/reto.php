<?php


function obtenerHora(){

    date_default_timezone_set('America/Bogota');

    return date("h:i a", time());
}

echo "¡Hola! ¿Me pod´rias decir qué hora es? \n
        ¡Claro! Son las " . obtenerHora() . "\n";


