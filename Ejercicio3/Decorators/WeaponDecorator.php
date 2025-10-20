<?php 

require_once __DIR__ . "/../Interface/Character.php";

use Ejercicio3\Character as Character;

class WeaponDecorator implements Character{

    protected $character;

    public function __construct(Character $character){
        $this->character = $character;
    }

    public function attack(){
        return $this->character->attack();
    }

    public function getName(){
        return $this->character->getName();
    }
}

?>