<?php error_reporting(-1);

require_once $_SERVER['DOCUMENT_ROOT'] . '/oop/classes/FirstClass.php';

$o1 = new FirstClass();
$o2 = new FirstClass();
var_dump($o1, $o2);