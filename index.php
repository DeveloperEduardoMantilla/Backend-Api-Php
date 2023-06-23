<?php
    require_once __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    require_once "app/controllers/routes.controller.php";

    $index = new RoutesController();
    $index->index();
?>