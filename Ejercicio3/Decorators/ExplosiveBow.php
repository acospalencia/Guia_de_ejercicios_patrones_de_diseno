<?php

require_once __DIR__ . "/WeaponDecorator.php";

class ExplosiveBow extends WeaponDecorator{

    public function attack(){
        return parent::attack() . " de flechas explosivas ";
    }
}

?>