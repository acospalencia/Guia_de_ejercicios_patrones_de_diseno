<?php
require_once __DIR__ .  "/../interfaces/character.php";

class Skeleton implements Character {

    public function getName() {
        return "Esqueleto";
    }

    public function atacar()  {
        return "El esqueleto ataca con su arco";
    }

    public function obtenerVelocidad(){
        return "El esqueleto tiene una velocidad media";
    }

}

?>