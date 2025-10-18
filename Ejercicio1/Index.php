<?php

require_once __DIR__ .  "/factories/characterFactory.php";

try {
    $dificultad = "facil"; // Cambia a 'facil' o 'dificil' para probar diferentes personajes

    $character = CharacterFactory::createCharacter($dificultad);
    echo "\nPersonaje: " . $character->getName() . " creado para la dificultad '$dificultad':\n";
    echo $character->atacar() . "\n";
    echo $character->obtenerVelocidad();

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>