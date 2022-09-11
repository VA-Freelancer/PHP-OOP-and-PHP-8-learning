<?php
error_reporting(-1);

require_once 'classes/Product.php';

function debug($data)
{
    echo "<pre>" . print_r($data, true) . "</pre>";
}
$book = new Product("Три мушкетера", 20, null, 1000);
$nootbook = new Product("Dell", 1000, 'Intel');
debug($book);
debug($nootbook);
echo $book->getProduct('book');
echo $nootbook->getProduct();