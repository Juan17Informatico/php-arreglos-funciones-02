<?php

function clear(){
    if(PHP_OS === "WINNT"){
        system("cls");
    }
}

function str_contains($haystack, $letter)
{
   $chars = str_split($haystack);
   foreach($chars as $char){
    if($char== $letter){
        return true;
    }
   }
   return false;
}

$possible_words = ["Bebida", "Prisma", "Ala", "Dolores", "Mares", "Trampas", "Pan", "Coca", "Hawai", "Volcan", "Elefante", "Circo"];

define("MAX_ATTEMPS", 6);

echo "====BIENVENIDO AL JUEGO DEL AHORCADO====\n\n";

//Iniciamos el juego

$choosen_word = $possible_words[rand(0, (count($possible_words) - 1))];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discover_letters = str_pad("", $word_length, "_");
$attemps = 0;



echo "Palabra de $word_length letras\n\n";
echo $discover_letters . "\n\n";

//Pedimos al usuario que escriba
$player_letter = readline("Escribe una letra: ");
$player_letter = strtolower($player_letter);


if (str_contains($choosen_word, $player_letter)) {

    $offset = 0;
    //Verificamos todas las ocurrencias de esta letra para reemplazarla
    while ( 
        ($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false) {
        
            $discover_letters[$letter_position] = $player_letter;
            $offset = $letter_position + 1;
    
    }

} else {
    echo "La palabra era: $choosen_word \n";

    $attemps++;
    echo "Letra incorrecta. Te quedan " . (MAX_ATTEMPS - $attemps) . " intentos \n";
}

echo "\n";
