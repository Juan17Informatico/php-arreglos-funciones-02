<?php

$cantidad_donada = readline("Por favor, ingresa la cantidad de donaciones acumuladas que tienes:");

if($cantidad_donada >= 100)
    echo "Perfecto, puedes retirar tu dinero";
else    
    echo "Lo siento, solo puedes retirar al alcanzar los 100 dolares acumulados";

