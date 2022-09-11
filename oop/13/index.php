<?php
error_reporting(-1);
use interfaces\IGadget;
use classes\{BookProduct, NotebookProduct};

function autoloder($class)
{
    $class = str_replace("\\", "/", $class);
    $file = __DIR__ . "/{$class}.php";
    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('autoloder');

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
echo $book->getProduct();

