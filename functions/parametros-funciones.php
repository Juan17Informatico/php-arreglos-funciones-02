<?php


function isStudentLegend($platziRank)
{

    $rangoLegend = 20000;

    if ($platziRank >= $rangoLegend) {
        echo "Eres un estudiante Legend, felicidades";
    } else {
        echo "lo sentimos, aún no alcanzas el level suficiente";
    }
}

$i = 0;
do {
    $inputUsuario = (int) readline("¿cuantos puntos de platzi tienes actualmente? ");

    isStudentLegend($inputUsuario);
    $i++;
} while ($i <= 5);



