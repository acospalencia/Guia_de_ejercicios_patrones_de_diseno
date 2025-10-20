<?php

require_once __DIR__ . "/../Interfaces/OutputStrategy.php";

class TxtOutput implements OutputStrategy {
    public function showMessage($message) {
        $file = __DIR__ . "/../mensaje.txt";
        file_put_contents($file, "Mensaje guardado: $message\n", FILE_APPEND);
        echo "Mensaje guardado en archivo TXT\n";
    }
}
?>
