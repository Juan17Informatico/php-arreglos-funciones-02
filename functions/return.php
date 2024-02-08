<?php

function freddy(){
    $numero_aleatorio = rand(1,3);

    $fraseFredy = "";

    switch ($numero_aleatorio) {

        case 1:
            $fraseFredy = "Nunca pares de aprender";
            break;
        case 2:
            $fraseFredy = "Las empresas no son familia.";
            break;
        case 3:
            $fraseFredy = "Amo PHP.";
            break;
    }

    return $fraseFredy;

}


$result = freddy();
echo $result;