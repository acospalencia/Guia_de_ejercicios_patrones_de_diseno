<?php
require_once __DIR__ . "/../Classes/Skeleton.php";
require_once __DIR__ . "/../Classes/Zombie.php";

class CharacterFactory {
    public static function createCharacter($dificultad){
        switch ($dificultad) {
            case 'facil':
                return new Skeleton();
            
            case 'dificil':
                return new Zombie();

            default:
                 throw new Exception("Dificultad desconocido: $dificultad");
                
        }
    }
}

?>
