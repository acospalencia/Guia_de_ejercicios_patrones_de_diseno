<?php

require_once __DIR__ . "/../Interfaces/OutputStrategy.php";

class JsonOutput implements OutputStrategy {
    public function showMessage($message) {
        echo json_encode(["mensaje" => $message], JSON_PRETTY_PRINT) . "\n";
    }
}
?>
