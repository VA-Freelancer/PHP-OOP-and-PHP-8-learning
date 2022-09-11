<?php error_reporting( -1);

require_once 'classes/File.php';

$file = new File(__DIR__ . '/file.txt');
$file->writeFile('строка 1');
$file->writeFile('строка 2');
$file->writeFile('строка 3');
$file->writeFile('строка 4');
$file->writeFile('строка 5');