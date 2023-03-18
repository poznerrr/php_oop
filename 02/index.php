<?php
require_once "classes/Product.php";
require_once "classes/NotebookProduct.php";
require_once "classes/BookProduct.php";

echo 'hello';

$notebook = new NotebookProduct('intel', 999, 'sky kake ');
echo $notebook->getProduct();

$bookSharlok = new BookProduct("Sharlok", 22.75, 134);
echo $bookSharlok->getProduct();

?>