<?php
error_reporting(-1);

require_once 'classes/Product.php';
require_once 'interface/I3D.php';
require_once 'interface/IGadget.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

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
var_dump($nootebook instanceof IGadget);
echo $book->getProduct();

