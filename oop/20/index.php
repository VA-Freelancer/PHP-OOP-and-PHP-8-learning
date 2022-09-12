<?php
error_reporting(-1);
use vproger\interfaces\IGadget;
use app\{BookProduct, NotebookProduct};

require __DIR__ . '/vendor/autoload.php';

function debug($data)
{
    echo "<pre>" . print_r($data, true) . "</pre>";
}

function offerCase(IGadget $product)
{
    echo "<p>Предлогаю чехол для ноутбука {$product->getName()}</p>";
}
$book = new BookProduct("Три мушкетера", 20,  1000);
$nootebook = new NotebookProduct('Dell', 1000, 'Intel');
//offerCase($nootebook);
$book->test = 'Hello';
echo $book->name;
debug($book);



$a1 = \app\A::getInstance();
$a2 = \app\A::getInstance();
$b1 = \app\B::getInstance();
$b2 = \app\B::getInstance();
var_dump($a1);
echo "<br>";
var_dump($a2);
echo "<br>";
var_dump($b1);
echo "<br>";
var_dump($b2);