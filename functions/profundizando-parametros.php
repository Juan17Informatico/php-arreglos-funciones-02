<?php 

// function suma($a = 0, $b = 0){
//     echo "La suma de $a + $b es: ". ($a + $b) . "\n";
// }

// suma(1);
// suma(25, 25);
// suma(350, 900);

// $arreglo1 = [1,2,3];
// $arreglo2 = [4,5,6];

//array unpacking
//Posterior a la verisón actual: 
// $resultado = array(...$arreglo1, ...$arreglo2);
// function suma($a, $b){
//     echo "La suma de $a + $b es: ". ($a + $b) . "\n";
// }

// $numero = [1,2];
// $numero2 = [1,2];

// suma(...$numero);

function sumaInfinita(...$array){
    // var_dump($array);
    $suma = 0;
    foreach ($array as $numero) {
        $suma += $numero;
    }
    echo "La suma total es: $suma \n";
}

sumaInfinita(1,2);
sumaInfinita(1,2,3,4);
sumaInfinita(1,2,345,23254365,6,6,123,6);