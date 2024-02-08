<?php

$precios_de_cafes = [12,5487,24,68,54,68,159,98,17,854,8721,87254,87,87,8754,249,1,65];

usort($precios_de_cafes, function($a, $b){
    return $a <=> $b;
});

var_dump($precios_de_cafes);