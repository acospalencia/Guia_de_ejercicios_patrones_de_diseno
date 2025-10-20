<?php
require_once __DIR__ . '/Classes/Knight.php';
require_once __DIR__ . '/Classes/Archer.php';
require_once __DIR__ . '/Decorators/MagicSword.php';
require_once __DIR__ . '/Decorators/ExplosiveBow.php';

$knight = new Knight();
echo $knight->attack() . "\n";

$poweredKnight = new MagicSword($knight);
echo $poweredKnight->attack() . "\n\n";

$archer = new Archer();
echo $archer->attack() . "\n";

$superArcher = new ExplosiveBow($archer);
echo $superArcher->attack() . "\n";
?>
