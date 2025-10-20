<?php

require_once __DIR__ . "/Classes/ConsoleOutput.php";
require_once __DIR__ . "/Classes/JsonOutput.php";
require_once __DIR__ . "/Classes/TxtOutput.php";
require_once __DIR__ . "/Classes/MessageContext.php";

$message = "Hola desde el patron Strategy!";

// Estrategia: consola
$context = new MessageContext(new ConsoleOutput());
$context->show($message);

echo "\n";

// Estrategia: JSON
$context->setStrategy(new JsonOutput());
$context->show($message);

echo "\n";

// Estrategia: archivo TXT
$context->setStrategy(new TxtOutput());
$context->show($message);

?>
