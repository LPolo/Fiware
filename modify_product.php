<?php
// Modifica el valor del producto de la ID dada, con la informacion pasada por 2º parametro
require_once "bootstrap.php";

$id = $argv[1];
$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

$product->setName($argv[2]);
$entityManager->flush();
echo sprintf("-%s\n", $product->getName());

