<?php


$uri = $_SERVER["REQUEST_URI"];

spl_autoload_register(function ($class) {
    include 'Classes/' . $class . '.php';
});


$router = new Router($uri);



?>