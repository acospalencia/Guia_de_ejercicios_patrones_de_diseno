<?php

require_once __DIR__ . "/../Interfaces/OutputStrategy.php";

class MessageContext {
    private $strategy;

    public function __construct(OutputStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function setStrategy(OutputStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function show($message) {
        $this->strategy->showMessage($message);
    }
}
?>
