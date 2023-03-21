<?php
require_once "classes/Product.php";
require_once "classes/NotebookProduct.php";
require_once "classes/BookProduct.php";

require_once __DIR__.'/vendor/autoload.php';


echo 'hello';

$notebook = new NotebookProduct('intel', 999, 'sky kake ');
echo $notebook->getProduct();
echo $notebook->testInterface();
//var_dump($notebook);

$bookSharlok = new BookProduct("Sharlok", 22.75, 134);
echo $bookSharlok->getProduct();

?>