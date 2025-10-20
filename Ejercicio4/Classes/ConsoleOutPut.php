<?php

require_once __DIR__ . "/../Interfaces/OutputStrategy.php";

class ConsoleOutput implements OutputStrategy {
    public function showMessage($message) {
        echo "Mensaje en consola: $message\n";
    }
}
?>
