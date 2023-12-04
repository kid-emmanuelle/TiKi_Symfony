<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(dirname(__DIR__) . "/src/Entity"),
    isDevMode: true,
);

$connection = DriverManager::getConnection([
    'driver' => 'pdo_sqlite',
    'path' => dirname(__DIR__) . '/db.sqlite',
], $config);

return new EntityManager($connection, $config);