<?php 

require_once __DIR__ . "/../Interface/FileSystemInterface.php";

class Win10FileSystem implements FileSystemInterface{

    public function openFile($filename){
        echo "Abriendo el archivo: $filename en win 10";
    }

}

?>