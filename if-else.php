<?php

$asientos_disponibles = 0;

if ($asientos_disponibles > 0)
    echo "Puedes Ver la pelicula de el araña";
else
    echo "Lo sentimos, te tocara spoilearte";

//Ejemplo

$array1 = [
    'string',
    'sad',
    1,
    'asd',
];
$array2 = [
    'string',
    'sad',
    1,
    'asd',
    'string',
    'sad',
    1,
    'asd',
    'string',
    'sad',
    1,
    'asd',
];


if(count($array1) >= count($array2))
    echo "array 1 es mayor que array 2";
else
    echo "Array 2 es mayor que array 1";
