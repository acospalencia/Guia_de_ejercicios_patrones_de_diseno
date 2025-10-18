<?php 

require_once __DIR__ . "/Classes/Win10FileSystem.php" ;
require_once __DIR__ . "/Classes/Win7FileSystem.php";
require_once __DIR__ . "/Adapters/Windows7To10Adapter.php";

$Windows10File = new Win10FileSystem();
echo $Windows10File->openFile("win10_doc.docx");

echo "\n";
$Windows7Files = new Win7FileSystem();
$adapter = new Windows7To10Adapter($Windows7Files);

echo $adapter->openFile("win7_doc.doc");

?>