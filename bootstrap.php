<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$driver = (new \Aternos\Model\Driver\Mysqli\Mysqli())
    ->setUsername($_ENV['DATABASE_USER'])
    ->setPassword($_ENV['DATABASE_PASSWORD'])
    ->setDatabase($_ENV['DATABASE_NAME']);

\Aternos\Model\Driver\DriverRegistry::getInstance()->registerDriver($driver);

include 'src/Controllers/UrlController.php';