<?php
    require_once __DIR__ . '/vendor/autoload.php';

    use proyectoApi\controllers\RoutesController; 
  
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $index = new RoutesController();
    $index->index();
?>