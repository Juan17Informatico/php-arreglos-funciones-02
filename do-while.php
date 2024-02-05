<?php

$usernames = ["Pepito123","Mr.Michi", "Spiderman"];
$i = 1;

$condicion = false;

do{
    // echo "Esto se ejcuta por lo menos una vez";
    
    $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");

    $hola = in_array($username, $usernames); 

    if($hola){
        echo "Si existe puedes pasar";
        $condicion = true;
    }else{
        echo "No existe, intenta nuevamente \n"; 
    }
}while($condicion != true);