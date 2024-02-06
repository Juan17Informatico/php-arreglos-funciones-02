<?php

// 2 -> 1
// 3 -> 2
// 4 -> 3
// 5 -> 5
// 6 -> 8
// 7 -> 13
// 8 -> 21

$numeroTienda = (int) readline("dime el número de tienda: "); 
$anterior = 0;
$actual = 1; 

for ($i=2; $i <= $numeroTienda; $i++) { 
    
    $temporal = $actual;
    $actual += $anterior;
    $anterior  = $temporal; 

    echo $actual . "\n";
}


