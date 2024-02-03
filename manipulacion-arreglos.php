<?php 

$edades = [18, 22, 40, 34,];
$esto_no_es_un_arreglo = "";

//Count

// echo count($edades);

//array_push

array_push($edades, 13);

// var_dump($edades);

//is_array
// var_dump(is_array($edades));

//explode 
// $lista_de_frutas = "fresa,cereza,manzana";

// $arreglo_lista_frutas = explode(",", $lista_de_frutas);

// var_dump($lista_de_frutas, $arreglo_lista_frutas);


//implode
$lista_de_frutas_array = ["fresa","cereza","manzana"]; 
$lista_de_frutas = implode(" php ", $lista_de_frutas_array);

var_dump($lista_de_frutas);