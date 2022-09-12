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
offerCase($nootebook);
debug($book);
debug($nootebook);
echo $book->getProduct();

