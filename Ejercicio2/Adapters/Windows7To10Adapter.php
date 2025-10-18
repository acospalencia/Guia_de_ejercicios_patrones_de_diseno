<?php 

require_once __DIR__ . "/../Classes/Win10FileSystem.php";
require_once __DIR__ . "/../Classes/Win7FileSystem.php";

class Windows7To10Adapter implements FileSystemInterface{
    private $oldWin7;

    public function __construct(Win7FileSystem $oldWin7){
        $this->oldWin7 = $oldWin7;
    }

    public function openFile($filename){
        return $this->oldWin7->openFileOld($filename);
    }
}


?>