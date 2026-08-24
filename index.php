<?php
require 'database.php';
require 'functions.php';
require 'router.php';


$router = [
    
    '/' => 'Views/index.view.php',
    '/register' => 'Controllers/register.php',

];

$ProjectName = "Scoppa HIT";
$name = "Home";

$uri = $_SERVER['REQUEST_URI'];


require router($uri,$router);




























