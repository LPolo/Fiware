<?php

// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;

//$paths = array("/config/yaml/parameters.yml");
//$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
    'path' => __DIR__ . '/db.mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'fiware',
    
);

$entityManager = EntityManager::create($conn, $config);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
