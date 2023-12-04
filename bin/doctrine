#!/usr/bin/env php
<?php

/**
 * @var Doctrine\ORM\EntityManager $entityManager
 */

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

require dirname(__DIR__) . '/public/index.php';

ConsoleRunner::run(
    new SingleManagerProvider($entityManager)
);