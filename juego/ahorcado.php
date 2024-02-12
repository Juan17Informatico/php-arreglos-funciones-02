<?php
define("MAX_ATTEMPS", 6);
$possible_words = ["Bebida", "Prisma", "Ala", "Dolores", "Mares", "Trampas", "Pan", "Coca", "Hawai", "Volcan", "Elefante", "Circo"];

function clear()
{
    if (PHP_OS === "WINNT") {
        popen("cls", "w");
    }
}

function printMan($attemps)
{

    switch ($attemps) {
        case 1:
            return "
                    +---+
                     |  |
                     O  |
                        |
                        |
                        |
                    =====";
        case 2:
            return  "
                    +---+
                     |  |
                     O  |
                     |  |
                        |
                        |
                    =====";
        case 3:
            return  "
                    +----+
                     |   |
                     O   |
                    /|   |
                         |
                         |
                    ======";
        case 4:
            return  "
                    +----+
                     |  |
                     O  |
                    /|\ |
                        |
                        |
                    ======";
        case 5:
            return  "
                    +----+
                     |  |
                     O  |
                    /|\ |
                    /   |
                        |
                    ======";
        case 6:
            return  "
                    +----+
                     |  |
                     O  |
                    /|\ |
                    / \ |
                        |
                    =====";
    }
}

function str_contains($haystack, $letter)
{
    $chars = str_split($haystack);
    foreach ($chars as $char) {
        if ($char == $letter) {
            return true;
        }
    }
    return false;
}

function initGame($possible_words)
{
    //Iniciamos el juego
    echo "====BIENVENIDO AL JUEGO DEL AHORCADO====\n\n";

    $choosen_word = randomWord($possible_words);

    $word_length = strlen($choosen_word);

    $discover_letters = str_pad("", $word_length, "_");

    $attemps = 0;

    do {
        echo "Palabra de $word_length letras\n\n";
        echo $discover_letters . "\n\n";
        //Pedimos al usuario que escriba
        $player_letter = readline("Escribe una letra: ");
        $player_letter = strtolower($player_letter);

        if (str_contains($choosen_word, $player_letter)) {

            $offset = 0;
            //Verificamos todas las ocurrencias de esta letra para reemplazarla
            while (
                ($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false
            ) {

                $discover_letters[$letter_position] = $player_letter;
                $offset = $letter_position + 1;
            }
        } else {
            // echo "La palabra era: $choosen_word \n";
            clear();
            $attemps++;
            echo printMan($attemps) . "\n\n";
            echo "Letra incorrecta. Te quedan " . (MAX_ATTEMPS - $attemps) . " intentos \n";
            sleep(2);
        }
        clear();
    } while ($attemps < MAX_ATTEMPS && $discover_letters != $choosen_word);

    // resetGame(0,$discover_letters);

    echo gameWin($attemps);
}

function gameWin($attemps)
{
    if ($attemps < MAX_ATTEMPS)
        return "Felicidades! has adivinado la palabra\n";
    else
        return "Suerte a la próxima vez!\n";
}

function resetGame($attemps, $discover_letters){
    #code...
}

function randomWord($words)
{
    $choosen_word = $words[rand(0, (count($words) - 1))];
    return strtolower($choosen_word);
}


initGame($possible_words);


echo "\n";
