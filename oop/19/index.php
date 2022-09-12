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

//debug($nootebook);
//echo $book->getProduct();

$a = new \app\A();
$b = new \app\B();

//$a->getTest();
//echo "<br>";
//$b->getTest();
//echo "<br>";
//$b->getTest2();
//echo "<br>";
//
//$book->doAction1()->doAction2();
//echo $book;

