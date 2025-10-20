<?php

require_once __DIR__ . "/WeaponDecorator.php";

class MagicSword extends WeaponDecorator{

    public function attack(){
        return parent::attack() . " flameante ";
    }
}

?>