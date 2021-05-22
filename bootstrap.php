<?php

// Load our autoloader
require_once __DIR__.'/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/page');

$twig = new \Twig\Environment($loader);