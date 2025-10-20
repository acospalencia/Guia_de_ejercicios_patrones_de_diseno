<?php 

require_once __DIR__ . "/../Interface/Character.php";

use Ejercicio3\Character as Character;

class Knight implements Character{

    public function getName(){
        return "Caballer";
    }

    public function attack(){
        return "El caballero ataca con su espada";
    }
}

?>