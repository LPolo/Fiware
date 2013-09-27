<?php
// Borra el producto con la id proporcionada
require_once "bootstrap.php";

$id = $argv[1];
$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

$entityManager->remove($product);
$entityManager->flush();
echo sprintf("-%s produto borrado \n", $product->getName());

