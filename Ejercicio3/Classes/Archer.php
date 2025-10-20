<?php 

require_once __DIR__ . "/../Interface/Character.php";

use Ejercicio3\Character as Character;

class Archer implements Character{

    public function getName(){
        return "Arquero";
    }

    public function attack(){
        return "El arquero ataca con su arco";
    }
}

?>