<?php 
require_once __DIR__ . "/../interfaces/character.php";

class Zombie implements Character{

    public function getName() {
        return "Zombie";
    }

    public function atacar(){
        return "El zombie ataca con las manos";
    }

    public function obtenerVelocidad(){
        return "El zombie tiene una velocidad baja";
        
    }

}

?>