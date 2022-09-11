<?php
error_reporting(-1);

//require_once 'classes/Product.php';
//require_once 'interfaces/I3D.php';
//require_once 'interfaces/IGadget.php';
//require_once 'classes/NotebookProduct.php';
//require_once 'classes/BookProduct.php';

function autoloderClass($class)
{
    $file = __DIR__ . "/classes/{$class}.php";
    if (file_exists($file)) {
        require_once $file;
    }
}
function autoloderInterface($class)
{
    $file = __DIR__ . "/interfaces/{$class}.php";
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('autoloderInterface');
spl_autoload_register('autoloderClass');

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

