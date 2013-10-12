<?php
// create_product.php
require_once "bootstrap.php";


$Usuario = new Usuario("Luis","email@email.com","bla");
$encuesta = new Encuesta("Encuesta 1");
$pregunta = new Pregunta("¿Hola?");


$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";